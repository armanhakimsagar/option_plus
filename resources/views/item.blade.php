<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 09-Nov-18
 * Time: 2:28 AM
 */
?>

@extends('layout.app')
@section('content')
    <div class="container-fluid p-2 pt-4">
        @if ($errors->has('item'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ $errors->first('item') }}
            </div>
        @endif
        @if(session()->has('item'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Inserted Successfully
            </div>
        @endif
        <div class="float-left">
            <h3>Item Management</h3>
        </div>
        <div class="float-right mt-1">
            Home > Item
        </div>
        <button class="btn btn-primary clearfix float-right my-2" data-toggle="collapse" data-target="#demo">
            <i class="fas fa-plus"></i> Item
        </button>
        <div id="demo" class="collapse clearfix">
            <div class="card welcome-wrapper shadow-reset">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{ url('ItemInsert') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Subcategory Name</label>
                                    <select name="subcategory_id" class="form-control" required>
                                        <option value="">Select Subcategory</option>
                                        @foreach($subcategory as $subcategories)
                                            <option value="{{ $subcategories->id }}">{{ $subcategories->subcategory }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input class="form-control" name="item" required>
                                </div>

                                <button type="submit" class="btn btn-success">Add Item</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(isset($itemUpdate))
            <div id="demo" class="clearfix">
                <div class="card welcome-wrapper shadow-reset">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="{{ url('ItemUpdate/'.$itemUpdate->id)}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">Select Category</option>
                                            @foreach($category as $categories)
                                                @if($itemUpdate->category_id == $categories->id)
                                                    <option value="{{ $categories->id }}"
                                                            selected>{{ $categories->category_name }}</option>
                                                @else
                                                    <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Subcategory Name</label>
                                        <select name="subcategory_id" class="form-control" required>
                                            <option value="">Select Subcategory</option>
                                            @foreach($subcategory as $subcategories)
                                                @if($itemUpdate->subcategory_id == $subcategories->id)
                                                    <option value="{{ $subcategories->id }}"
                                                            selected>{{ $subcategories->subcategory }}</option>
                                                @else
                                                    <option value="{{ $subcategories->id }}">{{ $subcategories->subcategory }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Item Name</label>
                                        <input class="form-control" value="{{$itemUpdate->item}}" name="item" required>
                                    </div>

                                    <button type="submit" class="btn btn-success">Update Item</button>
                                    <a href="{{route('item')}}" class="btn btn-warning">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="card clearfix welcome-wrapper shadow-reset mt-4">
            <div class="card-body">
                <table class="table table-bordered table-dark welcome-wrapper">
                    <caption>Showing 1 to 5 of 5 entries</caption>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Item Name</th>
                        <th>Subcategory Name</th>
                        <th>Category Name</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $listNum = 1; ?>
                    @foreach($item as $items)
                        <tr>
                            <td>{{$listNum}}</td>
                            <td>{{$items->item}}</td>
                            <td>{{$items->subcategory}}</td>
                            <td>{{$items->category_name}}</td>
                            <td>{{$items->updated_at->diffForHumans()}}</td>
                            <td class="text-center">
                                <a href="{{route('item')}}/{{$items->id}}"
                                   class="btn btn-primary mx-1"><i class="fas fa-edit"></i> Edit</a>
                                <button
                                        data-toggle="modal" data-target="#deleteModal"
                                        data-href="{{url('ItemDelete?delete='.$items->id)}}"
                                        class="btn btn-danger mx-1"><i class="fas fa-trash-alt"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <?php
                        $listNum++;
                        ?>
                    @endforeach
                    </tbody>
                </table>
                <!---  url('CategoryDelete?delete='.$categorys->id) --->
                <!--- Pagination Bar Start --->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!--- Pagination Bar End --->
            </div>
        </div>
        <!-- Central Modal Small -->
        <div class="modal fade text-dark" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete this Category, If you delete this the category, sub
                        category,
                        and item also deleted.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                        <a class="btn btn-primary btn-ok">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Central Modal Small -->
    </div>

@endsection


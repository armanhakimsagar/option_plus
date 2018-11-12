<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 09-Nov-18
 * Time: 9:33 AM
 */
?>
@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            @if(session()->has('product'))
                <div class="alert alert-success">
                    Inserted Successfully
                </div>
            @endif
            <div class="card text-dark">
                <div class="card-header">
                    Product Management
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{ url('addProduct') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <select class="form-control" name="category_id" required>
                                        <option value="">Add Category</option>
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="subcategory_id" required>
                                        <option value="">Add Subcategory</option>
                                        @foreach($subcategory as $subcategories)
                                            <option value="{{ $subcategories->id }}">{{ $subcategories->subcategory }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <select class="form-control" name="item_id" required>
                                        <option value="">Add Item</option>
                                        @foreach($item as $items)
                                            <option value="{{ $items->id }}">{{ $items->item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Name </label>
                                    <input class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Description </label>
                                    <input class="form-control" name="description" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="unitid" required>
                                        <option>Add Unit</option>
                                        @foreach($unit as $units)
                                            <option value="{{ $units->id }}">{{ $units->unit_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Add Product</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection

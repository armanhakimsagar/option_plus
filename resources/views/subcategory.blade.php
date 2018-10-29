@extends('master.layout')
@section('middle')


            <div id="page-wrapper"><br><br><br>
                <div class="row">

                    <div class="col-lg-8">

                    @if ($errors->has('subcategory'))
                        <div class="alert alert-success">
                            {{ $errors->first('subcategory') }}
                        </div>
                    @endif
                    @if(session()->has('subcategory'))
				    <div class="alert alert-success">
				        Inserted Successfully
				    </div>
					@endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Subcategory Management
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('SubcategoryInsert') }}" method="post">
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
                                                <input class="form-control" name="subcategory" required>
                                            </div>

                                            <button type="submit" class="btn btn-success">Add Subcategory</button>
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
                
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>

@endsection
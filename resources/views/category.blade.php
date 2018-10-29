@extends('master.layout')
@section('middle')


            <div id="page-wrapper"><br><br><br>
                <div class="row">

                    <div class="col-lg-8">

                    @if ($errors->has('category_name'))
                        <div class="alert alert-success">
                            {{ $errors->first('category_name') }}
                        </div>
                    @endif
                    @if(session()->has('category'))
				    <div class="alert alert-success">
				        Inserted Successfully
				    </div>
					@endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Category Management
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('CategoryInsert') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input class="form-control" name="category_name" required>
                                            </div>
                                            <button type="submit" class="btn btn-success">Add Category</button>
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
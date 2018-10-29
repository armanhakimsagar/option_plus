@extends('master.layout')
@section('middle')


            <div id="page-wrapper"><br><br><br>
                <div class="row">

                    <div class="col-lg-8">
                    @if(session()->has('unit'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Unit Management
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('unitInsert') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Unit Name</label>
                                                <input class="form-control" name="unitName" required>
                                            </div>
                                            <button type="submit" class="btn btn-success">Add Unit</button>
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
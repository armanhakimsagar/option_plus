@extends('master.layout')
@section('middle')

            <div id="page-wrapper"><br><br><br>
                <div class="row">
                    <div class="col-lg-8">
                    @if(session()->has('client'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Client Management
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('ClientInsert') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input class="form-control" name="customerName" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Business</label>
                                                <input class="form-control" name="business" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input class="form-control" name="phone" required pattern="[0-9]{0,11}">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control" name="address" required>
                                            </div>
                                            <button type="submit" class="btn btn-success">Add Client</button>
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
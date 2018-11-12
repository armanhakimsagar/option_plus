@extends('layout.app')
@section('content')


                <div class="row">
                    <div class="col-lg-8">
                    @if(session()->has('purchase'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="card text-dark">
                            <div class="card-header">
                                Purchase Order Management
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Requisition no</th>
                                            <th>Details</th>
                                        </tr>
                                        @foreach($purchaseOrder as $purchaseOrders)
                                        <tr>
                                            <td>{{ $purchaseOrders->requisition_no }}</td>
                                            <td><a href="{{ url('purchaseOrderApprove/'.$purchaseOrders->id) }}">Details</a> </td>
                                        </tr>
                                        @endforeach

                                    </table>
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

@endsection
@extends('layout.app')
@section('content')


                <div class="row">
                    <div class="col-lg-8">
                    @if(session()->has('sales_cash_return'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="card text-dark">
                            <div class="card-header">
                                Sales Cash Return
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('salesCashInsert') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <select class="form-control" name="sale_id" required>
                                                    <option value="">Add Sales ID</option>
                                                    @foreach($sale as $sales)
                                                        <option value="{{ $sales->id }}">{{ $sales->id }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="product_id" required>
                                                    <option value="">Add Product</option>
                                                    @foreach($product as $products)
                                                        <option value="{{ $products->id }}">{{ $products->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <select class="form-control" name="client_id" required>
                                                <option value="">Add Client</option>
                                                @foreach($customer as $clients)
                                                    <option value="{{ $clients->id }}">{{ $clients->customer_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="form-group">
                                                <label>Qty </label>
                                                <input class="form-control" name="qty" required pattern="[0-9]{0,10}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Cash Return </label>
                                                <input class="form-control" name="cashReturn" required pattern="[0-9]{0,10}">
                                            </div> 
                                            <button type="submit" class="btn btn-success">Add Cash Return</button>
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

@endsection
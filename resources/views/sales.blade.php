@extends('master.layout')
@section('middle')

            <div id="page-wrapper"><br><br><br>
                <div class="row">
                    <div class="col-lg-8">
                    @if(session()->has('sale'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Sales Management
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('salesInsert') }}" method="post">
                                        {{ csrf_field() }}
                                        	<div class="form-group">
                                                <select class="form-control" name="product_id" required>
		                                        	<option value="">Add Product</option>
                                                    @foreach($product as $products)
                                                        <option value="{{ $products->id }}">{{ $products->name }}</option>
                                                    @endforeach
		                                        </select>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label>Qty </label>
                                                <input class="form-control" name="qty" required pattern="[0-9]{0,10}">
                                            </div>
                                            <div class="form-group">
                                                <label>Price </label>
                                                <input class="form-control" name="price" required pattern="[0-9]{0,10}">
                                            </div>
                                            <div class="form-group">
                                                <label>Descrition </label>
                                                <input class="form-control" name="description" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Vat </label>
                                                <input class="form-control" name="vat" required pattern="[0-9]{0,10}">
                                            </div>
                                            <div class="form-group">
                                                <label>Discount </label>
                                                <input class="form-control" name="discount" required pattern="[0-9]{0,10}">
                                            </div>
                                            <div class="form-group">
                                                <label>Net Payable </label>
                                                <input class="form-control" name="net_payable" required pattern="[0-9]{0,10}">
                                            </div>  
                                            <select class="form-control" name="supplier_id" required>
                                                <option value="">Add Client</option>
                                                @foreach($customer as $clients)
                                                    <option value="{{ $clients->id }}">{{ $clients->customer_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="form-group">
                                                <label>Due </label>
                                                <input class="form-control" name="due" required>
                                            </div> 
                                            <button type="submit" class="btn btn-success">Add Sales</button>
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
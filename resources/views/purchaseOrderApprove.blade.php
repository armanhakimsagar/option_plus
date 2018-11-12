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
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('poInsert') }}" method="post">
                                        {{ csrf_field() }}

                                        @foreach($purchaseOrder as $purchaseOrders)
                                            <div class="form-group">
                                                <select class="form-control" name="product_id" required>
                                                    <option value="">Add Product</option>
                                                    @foreach($product as $products)
                                                        <option value="{{ $products->id }}"
                                                        @if($products->id == $purchaseOrders->product_id)
                                                            {{ "selected" }}
                                                        @endif
                                                        >{{ $products->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Invoice </label>
                                                <input type="text" name="invoice" value="{{ $purchaseOrders->invoice }}" class="form-control">
                                            </div>
                                            <input type="hidden" name="id" value="{{ $purchaseOrders->id }}">
                                            
                                            <div class="form-group">
                                                <label>Requisition Qty </label>
                                                <input class="form-control" name="qty" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->requisition_qty }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Price </label>
                                                <input class="form-control" name="price" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->price }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Descrition </label>
                                                <input class="form-control" name="description" required value="{{ $purchaseOrders->description }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Vat </label>
                                                <input class="form-control" name="vat" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->vat }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Tax </label>
                                                <input class="form-control" name="tax" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->vat }}">
                                            </div>
                                            <div class="form-group">
                                                <label>AIT </label>
                                                <input class="form-control" name="ait" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->ait }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Discount </label>
                                                <input class="form-control" name="discount" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->discount }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Net Payable </label>
                                                <input class="form-control" name="net_payable" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->net_payable }}">
                                            </div>  
                                            <select class="form-control" name="supplier_id" required>
                                                <option value="">Add Supplier</option>
                                                @foreach($supplier as $suppliers)
                                                    <option value="{{ $suppliers->id }}">{{ $suppliers->supplier_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="form-group">
                                                <label>Due </label>
                                                <input class="form-control" name="due" required pattern="[0-9]{0,10}" value="{{ $purchaseOrders->due }}">
                                            </div> 
                                            @endforeach
                                            <button type="submit" class="btn btn-success">Approve</button>
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
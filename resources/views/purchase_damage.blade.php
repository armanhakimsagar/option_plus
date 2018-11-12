@extends('layout.app')
@section('content')

                <div class="row">
                    <div class="col-lg-8">
                    @if(session()->has('purchase_damage'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="card text-dark">
                            <div class="card-header">
                                Purchase Damage
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('purchaseDamageInsert') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <select class="form-control" name="purchase_id" required>
                                                    <option value="">Add Purchase No</option>
                                                    @foreach($purchase as $purchases)
                                                        <option value="{{ $purchases->id }}">{{ $purchases->id }}</option>
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
                                            <select class="form-control" name="supplier_id" required>
                                                <option value="">Add Supplier</option>
                                                @foreach($supplier as $suppliers)
                                                    <option value="{{ $suppliers->id }}">{{ $suppliers->supplier_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="form-group">
                                                <label>Qty </label>
                                                <input class="form-control" name="qty" required pattern="[0-9]{0,10}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Damage Cost </label>
                                                <input class="form-control" name="damage_cost" required pattern="[0-9]{0,10}">
                                            </div> 
                                            <button type="submit" class="btn btn-success">Add Damage Cost</button>
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
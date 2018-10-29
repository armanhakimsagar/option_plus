@extends('master.layout')
@section('middle')

            <div id="page-wrapper"><br><br><br>
                <div class="row">
                    <div class="col-lg-8">
                    @if(session()->has('sale_damage'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Sales Damage
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ url('saleDamageInsert') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <select class="form-control" name="sales_id" required>
                                                    <option value="">Add Sales No</option>
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
                                                @foreach($client as $clients)
                                                    <option value="{{ $clients->id }}">{{ $clients->customer_name }}</option>
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
                                            <button type="submit" class="btn btn-success">Add Damage</button>
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
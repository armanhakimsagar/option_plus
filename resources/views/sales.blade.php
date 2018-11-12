@extends('layout.app')
@section('content')

    <div class="container-fluid p-2 pt-4">
        @if(session()->has('sale'))
            <div class="alert alert-success">
                Inserted Successfully
            </div>
        @endif
        <div class="card welcome-wrapper p-0 shadow-reset">
            <div class="card-header">
                Sales Management
            </div>
            <div class="card-body">
                <form role="form" action="{{ url('salesInsert') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="example-text-input" class="col-form-label">Price:</label>
                            <select class="form-control" name="product_id" required>
                                <option value="">Add Product:</option>
                                @foreach($product as $products)
                                    <option value="{{ $products->id }}">{{ $products->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="example-text-input" class="col-form-label">Qty</label>
                            <input class="form-control" name="qty" required pattern="[0-9]{0,10}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="example-text-input" class="col-form-label">Price:</label>
                            <input class="form-control" name="price" required pattern="[0-9]{0,10}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="example-text-input" class="col-form-label">Descrition:</label>
                                <input class="form-control" name="description" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="example-text-input" class="col-form-label">Vat:</label>
                                <input class="form-control" name="vat" required pattern="[0-9]{0,10}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="example-text-input" class="col-form-label">Discount:</label>
                                <input class="form-control" name="discount" required pattern="[0-9]{0,10}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="example-text-input" class="col-form-label">Net Payable:</label>
                                <input class="form-control" name="net_payable" required pattern="[0-9]{0,10}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="example-text-input" class="col-form-label">Add Client:</label>
                            <select class="form-control" name="supplier_id" required>
                                <option value="">Add Client</option>
                                @foreach($customer as $clients)
                                    <option value="{{ $clients->id }}">{{ $clients->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="example-text-input" class="col-form-label">Due:</label>
                                <input class="form-control" name="due" required>
                        </div>
                    </div>
                    <div class="my-4 mr-5">
                        <button type="submit" class="w-25 btn btn-success float-right">Add Sales</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
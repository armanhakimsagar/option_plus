<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 09-Nov-18
 * Time: 9:41 AM
 */
?>

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
                    Requisition Management
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{ url('requisitionInsert') }}" method="post">
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
                                    <label>Invoice </label>
                                    <input type="text" name="invoice" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Requisition Qty </label>
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
                                    <label>Tax </label>
                                    <input class="form-control" name="tax" required pattern="[0-9]{0,10}">
                                </div>
                                <div class="form-group">
                                    <label>AIT </label>
                                    <input class="form-control" name="ait" required pattern="[0-9]{0,10}">
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
                                    <option value="">Add Supplier</option>
                                    @foreach($supplier as $suppliers)
                                        <option value="{{ $suppliers->id }}">{{ $suppliers->supplier_name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label>Due </label>
                                    <input class="form-control" name="due" required pattern="[0-9]{0,10}">
                                </div>
                                <button type="submit" class="btn btn-success">Add Requisition</button>
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

@endsection


<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 09-Nov-18
 * Time: 9:24 AM
 */
?>

@extends('layout.app')
@section('content')

        <div class="row">
            <div class="col-lg-8">
                @if(session()->has('client'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                @endif
                <div class="card text-dark">
                    <div class="card-header">
                        Client Management
                    </div>
                    <div class="card-body">
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

@endsection


@extends('layout.app')
@section('content')


                <div class="row">
                    <div class="col-lg-12">
                    @if(session()->has('purchase'))
                    <div class="alert alert-success">
                        Inserted Successfully
                    </div>
                    @endif
                        <div class="card text-dark">
                            <div class="card-header">
                                Sales Management Report
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Sales ID</td>
                                            <td>Product name</td>
                                            <td>Sells Damage</td>
                                            <td>Sells Return</td>
                                            <td>Total Sold</td>
                                        </tr>
                                        @foreach($sale as $sales)
                                        <tr>
                                            <td>{{ $sales->id }}</td>
                                            <td>
                                            @foreach($product as $products)
                                                @if($sales->product_id == $products->id)
                                                    {{ $products->name }}
                                                @endif
                                            @endforeach
                                            </td>
                                            <td>
                                                <?php $damage_sum = 0; ?>
                                                @foreach($sale_damage as $sale_damages)
                                                    @if($sale_damages->sales_id == $sales->id)
                                                    <?php
                                                        $damage_sum += $sale_damages->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $damage_sum; ?>
                                            </td>
                                            <td>
                                                <?php $sale_cash_returns_sum = 0; ?>
                                                @foreach($sale_cash_return as $sale_cash_returns)
                                                    @if($sale_cash_returns->sales_id == $sales->id)
                                                    <?php
                                                        $sale_cash_returns_sum += $sale_cash_returns->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $sale_cash_returns_sum; ?>
                                            </td>
                                            <td>
                                                <?php echo $sales->qty - $sale_cash_returns_sum-$damage_sum; ?>
                                            </td>
                                        </tr>  
                                        @endforeach
                                    </table>
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
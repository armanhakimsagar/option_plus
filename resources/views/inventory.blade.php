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
                                Inventory Management Report
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Product name</td>
                                            <td>Total Damage</td>
                                            <td>Total Sales Return</td>
                                            <td>Total Purchase Return</td>
                                            <td>Total Sold</td>
                                            <td>Total Buy</td>
                                            <td>
                                                Current Qty <br>
                                                <small>(Buy - Retrun) - (Sold + Retrun)</small>
                                            </td>
                                        </tr>
                                        @foreach($product as $products)
                                        <tr>
                                            <td>
                                                {{ $products->name }}
                                            </td>
                                            <td>
                                                <?php $sales_damage_sum = 0; ?>
                                                @foreach($sale_damage as $sale_damages)
                                                    @if($sale_damages->product_id == $products->id)
                                                    <?php
                                                        $sales_damage_sum += $sale_damages->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php $purchase_damage_sum = 0; ?>
                                                @foreach($purchase_damage as $purchase_damages)
                                                    @if($purchase_damages->product_id == $products->id)
                                                    <?php
                                                        $purchase_damage_sum += $purchase_damages->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $purchase_damage_sum+$sales_damage_sum; ?>
                                            </td>
                                            <td>
                                                <?php $sales_return_sum = 0; ?>
                                                @foreach($sale_cash_return as $sale_returns)
                                                    @if($sale_returns->product_id == $products->id)
                                                    <?php
                                                        $sales_return_sum += $sale_returns->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $sales_return_sum; ?>
                                            </td>
                                            <td>
                                                <?php $purchase_return_sum = 0; ?>

                                                @foreach($purchase_cash_return as $purchase_returns)
                                                    @if($purchase_returns->product_id == $products->id)
                                                    <?php
                                                        $purchase_return_sum += $purchase_returns->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $purchase_return_sum; ?>
                                            </td>
                                            <td>
                                                <?php $total_sold = 0; ?>
                                                @foreach($sale as $sales)
                                                    @if($sales->product_id == $products->id)
                                                    <?php
                                                        $total_sold += $sales->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $total_sold; ?>
                                            </td>
                                            <td>
                                                <?php $total_buy = 0; ?>
                                                @foreach($purchase as $purchases)
                                                    @if($purchases->product_id == $products->id)
                                                    <?php
                                                        $total_buy += $purchases->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $total_buy; ?>
                                            </td>
                                            <td>    
                                                <?php
                                                    echo $total_buy - $purchase_return_sum - $total_sold + $sales_return_sum - $purchase_damage_sum - $sales_damage_sum;
                                                ?>
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
                
                <!-- /.row -->

@endsection
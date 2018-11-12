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
                                Purchase Management Report
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Purchase ID</td>
                                            <td>Product name</td>
                                            <td>Buying Qty</td>
                                            <td>Purchase Damage</td>
                                            <td>Purchase Return</td>
                                        </tr>
                                        @foreach($purchases as $purchase)
                                        <tr>
                                            <td>{{ $purchase->id }}</td>
                                            <td>
                                            @foreach($product as $products)
                                                @if($purchase->product_id == $products->id)
                                                    {{ $products->name }}
                                                @endif
                                            @endforeach
                                            </td>
                                            <td>{{ $purchase->qty }}</td>
                                            <td>
                                                <?php $damage_sum = 0; ?>
                                                @foreach($purchase_damage as $purchase_damages)
                                                    @if($purchase_damages->purchase_id == $purchase->id)
                                                    <?php
                                                        $damage_sum += $purchase_damages->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $damage_sum; ?>
                                            </td>
                                            <td>
                                                <?php $purchase_cash_returns_sum = 0; ?>
                                                @foreach($purchase_cash_return as $purchase_cash_returns)
                                                    @if($purchase_cash_returns->purchase_id == $purchase->id)
                                                    <?php
                                                        $purchase_cash_returns_sum += $purchase_cash_returns->qty;
                                                    ?>
                                                    @endif
                                                @endforeach
                                                <?php echo $purchase_cash_returns_sum; ?>
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
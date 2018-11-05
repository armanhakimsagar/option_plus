@extends('master.layout')
@section('middle')

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->

                <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Category</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('category') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Subcategory</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('subcategory') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Item</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('item') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Unit</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('unit') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Customer</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('client') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-arrow-circle-right fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Supplier</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('supplier') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Product</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('product') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br>Requisition</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('purchase') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br> Order</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('purchaseOrder') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br> Cash <br> Return</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('purchase_cash_return') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>                    

                 <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br> Return</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('purchase_cash_return') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>                    

                 <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br> Repair</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('purchase_repair') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>     

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br> Damage</div>
                                    </div>
                                </div>
                            </div>
                    
                            <a href="{{ url('purchase_damage') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>     

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Sales <br> Requisition</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('SalesOrder') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Sales <br> Order</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('sales') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Sales <br> Cash <br> Return </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('sales_cash_return') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Sales <br> Repair </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('sales_repair') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Sales <br> Damage </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('sales_damage') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Purchase <br> Management  <br> Report</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('PurchaseManagementReport') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-gift fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Sales <br> Management  <br> Report</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('salesManagementReport') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-key fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>User <br> Management</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('UserManagementController') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-arrow-circle-right fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Total <br> Inventory</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('inventoryManagementReport') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    

                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>

                        <div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

                    </div>
                    <!-- /.col-lg-4 -->
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>

                        <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                    </div>
                    <!-- /.col-lg-4 -->
                </div>

                
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <script type="text/javascript">
            Highcharts.chart('container2', {
              chart: {
                type: 'column'
              },
              title: {
                text: 'Damage Report'
              },
              subtitle: {
                text: ''
              },
              xAxis: {
                categories: [
                  'Jan',
                  'Feb',
                  'Mar',
                  'Apr',
                  'May',
                  'Jun',
                  'Jul',
                  'Aug',
                  'Sep',
                  'Oct',
                  'Nov',
                  'Dec'
                ],
                crosshair: true
              },
              yAxis: {
                min: 0,
                title: {
                  text: ''
                }
              },
              tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
              },
              plotOptions: {
                column: {
                  pointPadding: 0.2,
                  borderWidth: 0
                }
              },
              series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

              }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

              }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

              }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

              }]
            });
        </script>
        <script type="text/javascript">
                        
            Highcharts.chart('container1', {
              chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
              },
              title: {
                text: 'Total Sales Report'
              },
              tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
              },
              plotOptions: {
                pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                      color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                  }
                }
              },
              series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                  name: 'Chrome',
                  y: 61.41,
                  sliced: true,
                  selected: true
                }, {
                  name: 'Internet Explorer',
                  y: 11.84
                }, {
                  name: 'Firefox',
                  y: 10.85
                }, {
                  name: 'Edge',
                  y: 4.67
                }, {
                  name: 'Safari',
                  y: 4.18
                }, {
                  name: 'Sogou Explorer',
                  y: 1.64
                }, {
                  name: 'Opera',
                  y: 1.6
                }, {
                  name: 'QQ',
                  y: 1.2
                }, {
                  name: 'Other',
                  y: 2.61
                }]
              }]
            });
        </script>

@endsection
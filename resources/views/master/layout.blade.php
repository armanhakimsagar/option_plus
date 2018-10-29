<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Option Plus</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Option Plus</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="{{ url('/dashboard') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <?php 
                            $id = Session::get('userid');

                            $Category = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '1')->get();
                            $Customer = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '2')->get();
                            $Supplier = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '3')->get();
                            $Unit = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '4')->get();
                            $Product = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '5')->get();

                            $Purchase = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '15')->get();
                            $PurchaseCashReturn = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '6')->get();
                            $PurchaseRepair = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '7')->get();
                            $PurchaseDamage = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '17')->get();


                            $Sales = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '16')->get();
                            $SalesCashReturn = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '8')->get();
                            $SalesRepair = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '9')->get();
                            $SalesDamage = DB::table('user_permissions')->where('userid', '=', $id)->where('permissionid', '=', '10')->get();

                            ?> 
                            <li>
                                <a href="{{ url('subcategory') }}"><i class="fa fa-dashboard fa-fw"></i>Subcategory</a>
                            </li>
                            <li>
                                <a href="{{ url('item') }}"><i class="fa fa-dashboard fa-fw"></i>Item</a>
                            </li>
                            @if(count($Category) == 1)
                            <li>
                                <a href="{{ url('category') }}"><i class="fa fa-dashboard fa-fw"></i> Category </a>
                            </li>
                            @endif
                            @if(count($Customer) == 1)
                            <li>
                                <a href="{{ url('client') }}"><i class="fa fa-dashboard fa-fw"></i> Customer </a>
                            </li>
                            @endif
                            @if(count($Supplier) == 1)
                            <li>
                                <a href="{{ url('supplier') }}"><i class="fa fa-dashboard fa-fw"></i> Supplier </a>
                            </li>
                            @endif
                            @if(count($Unit) == 1)
                            <li>
                                <a href="{{ url('unit') }}"><i class="fa fa-dashboard fa-fw"></i> Unit </a>
                            </li>
                            @endif
                            @if(count($PurchaseCashReturn) == 1)
                            <li>
                                <a href="{{ url('purchase_cash_return') }}"><i class="fa fa-dashboard fa-fw"></i> Purchase Cash Return</a>
                            </li>
                            @endif
                            @if(count($PurchaseRepair) == 1)
                            <li>
                                <a href="{{ url('purchase_repair') }}"><i class="fa fa-dashboard fa-fw"></i> Purchase Repair</a>
                            </li>
                            @endif
                            @if(count($PurchaseDamage) == 1)
                            <li>
                                <a href="{{ url('purchase_damage') }}"><i class="fa fa-dashboard fa-fw"></i> Purchase Damage</a>
                            </li>
                            @endif
                            @if(count($SalesCashReturn) == 1)
                            <li>
                                <a href="{{ url('sales_cash_return') }}"><i class="fa fa-dashboard fa-fw"></i> Sales Cash Return</a>
                            </li>
                            @endif
                            @if(count($SalesRepair) == 1)
                            <li>
                                <a href="{{ url('sales_repair') }}"><i class="fa fa-dashboard fa-fw"></i> Sales Repair</a>
                            </li>
                            @endif
                            @if(count($SalesDamage) == 1)
                            <li>
                                <a href="{{ url('sales_damage') }}"><i class="fa fa-dashboard fa-fw"></i> Sales Damage</a>
                            </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </nav>


        @yield('middle')
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('js/raphael.min.js') }}"></script>
        <script src="{{ asset('js/morris.min.js') }}"></script>
        <script src="{{ asset('js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/startmin.js') }}"></script>

    </body>
</html>
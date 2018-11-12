<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 08-Nov-18
 * Time: 8:31 AM
 */
?>
@extends('layout.app')
@section('content')

    <div class="row mx-1">
        <div class="col-sm-6 col-lg-3 my-2">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <a href="{{ route('category') }}" class="btn bg-transparent dropdown-toggle theme-toggle text-light"
                                id="dropdownMenuButton">
                            <i class="fa fa-cog"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{count($category)}}</span>
                    </h4>
                    <p class="text-light">Total Category</p>
                    <div class="chart-wrapper px-0" style="height:70px;">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 my-2">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <a href="{{ route('subcategory') }}" class="btn bg-transparent dropdown-toggle theme-toggle text-light"
                                id="dropdownMenuButton">
                            <i class="fa fa-cog"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{count($subcategory)}}</span>
                    </h4>
                    <p class="text-light">Total Subcategory</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 my-2">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <a href="{{ route('item') }}" class="btn bg-transparent dropdown-toggle theme-toggle text-light"
                                id="dropdownMenuButton">
                            <i class="fa fa-cog"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{count($item)}}</span>
                    </h4>
                    <p class="text-light">Total Item</p>
                </div>
                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 my-2">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <a href="{{ route('unit') }}" class="btn bg-transparent dropdown-toggle theme-toggle text-light"
                                id="dropdownMenuButton">
                            <i class="fa fa-cog"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{count($unit)}}</span>
                    </h4>
                    <p class="text-light">Total Unit</p>

                    <div class="chart-wrapper px-3" style="height:70px;" height="70">
                        <canvas id="widgetChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome-adminpro-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                    <div class="welcome-wrapper shadow-reset res-mg-t mb-3">
                        <div class="welcome-adminpro-title">
                            <h1>Welcome Sale Bazar</h1>
                            <p>Puarchase, Sales all info show there.</p>
                        </div>
                        <div class="adminpro-message-list">
                            <ul class="message-list-menu list-unstyled">
                                <li><span class="message-serial message-cl-one">1</span> <span class="message-info">New Product Add</span>
                                    <span class="message-time">09:00 pm</span>
                                </li>
                                <li><span class="message-serial message-cl-two">2</span> <span class="message-info">Purchase cash return</span>
                                    <span class="message-time">10:00 pm</span>
                                </li>
                                <li><span class="message-serial message-cl-three">3</span> <span class="message-info">Purchase repair a product</span>
                                    <span class="message-time">05:00 pm</span>
                                </li>
                                <li><span class="message-serial message-cl-four">4</span> <span class="message-info">Sales cash return</span>
                                    <span class="message-time">04:00 pm</span>
                                </li>
                                <li><span class="message-serial message-cl-five">5</span> <span class="message-info">Purchase cash return</span>
                                    <span class="message-time">09:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                    <div class="dashboard-line-chart shadow-reset mb-3">
                        <div class="flot-chart dashboard-chart">
                            <canvas id="barchart1"></canvas>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="linechart-dash-rate">
                                    <h2>$<span class="count">5000</span></h2>
                                    <p>Annual Purchase</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="linechart-dash-rate">
                                    <h2 >$<span class="count">7000</span></h2>
                                    <p>Annual Sales</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="linechart-dash-rate">
                                    <h2>$<span class="count">3000</span></h2>
                                    <p>revenue Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-12 desplay-n-tablet">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Income</h2>
                                <div class="main-income-phara">
                                    <p>Monthly</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">8,88,200</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"><canvas width="39" height="19"
                                                                  style="display: inline-block; width: 39px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>Total Income</p>
                                <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Orders</h2>
                                <div class="main-income-phara order-cl">
                                    <p>Annual</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">7,23,20</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline6"><canvas width="56" height="19"
                                                                  style="display: inline-block; width: 56px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>New Orders</p>
                                <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Visitor</h2>
                                <div class="main-income-phara visitor-cl">
                                    <p>Today</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">8,88,200</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline2"><canvas width="39" height="19"
                                                                  style="display: inline-block; width: 39px; height: 19px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>New Visitor</p>
                                <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome Project, sale area start-->












@endsection

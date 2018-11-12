<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 08-Nov-18
 * Time: 8:32 AM
 */
?>

<ul class="sidebar navbar-nav" id="sidebar">
    <div class="sidebar-header">
        <h3>Sales Bazar</h3>
        <strong>SB</strong>
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sales</span>
        </a>
        <div class="dropdown-menu bg-dark animated bounceInLeft" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Sales Information:</h6>
            <a class="dropdown-item" href="#"> Sales Requisition</a>
            <a class="dropdown-item" href="{{ route('sales') }}"> Sales Order</a>
            <a class="dropdown-item" href="{{ route('salesCashReturn') }}"> Sales Cash Return</a>
            <a class="dropdown-item" href="{{ route('salesRepair') }}"> Sales Repair</a>
            <a class="dropdown-item" href="{{ route('salesDamage') }}"> Sales Damage</a>
            <a class="dropdown-item" href="{{ route('salesManagementReport') }}"> Sales Management Report</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Purchase</span>
        </a>
        <div class="dropdown-menu bg-dark animated bounceInLeft" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Purchase Information:</h6>
            <a class="dropdown-item" href="{{ route('purchase') }}"> Purchase Requisition</a>
            <a class="dropdown-item" href="{{ route('purchaseOrder') }}"> Purchase Order</a>
            <a class="dropdown-item" href="{{ route('purchaseCashReturn') }}"> Purchase Cash Return</a>
            <a class="dropdown-item" href="{{ route('purchaseCashReturn') }}"> Purchase Return</a>
            <a class="dropdown-item" href="{{ route('purchaseRepair') }}"> Purchase Repair</a>
            <a class="dropdown-item" href="{{ route('purchaseDamage') }}"> Purchase Damage</a>
            <a class="dropdown-item" href="{{ route('purchaseManagementReport') }}"> Purchase Management Report</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Product</span>
        </a>
        <div class="dropdown-menu bg-dark animated bounceInLeft" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Product Profile:</h6>
            <a class="dropdown-item" href="{{ route('product') }}"> Product Profile</a>
            <a class="dropdown-item" href="#"> Product Category</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Manage Product price:</h6>
            <a class="dropdown-item" href="#"> Sales Price</a>
            <a class="dropdown-item" href="#"> Product-price-list</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Others Information:</h6>
            <a class="dropdown-item" href="#"> Transaction-terms</a>
            <a class="dropdown-item" href="#"> Product-measurment</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Customer</span>
        </a>
        <div class="dropdown-menu bg-dark animated bounceInLeft" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Customer Profile:</h6>
            <a class="dropdown-item" href="#">  Customer Category</a>
            <a class="dropdown-item" href="{{ route('customer') }}">Customer Management</a>
            <a class="dropdown-item" href="#"> Customer Report</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Supplier</span>
        </a>
        <div class="dropdown-menu bg-dark animated bounceInLeft" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Manage supplier:</h6>
            <a class="dropdown-item" href="#"> Supplier Category</a>
            <a class="dropdown-item" href="{{ route('supplier') }}"> Supplier Profile</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('inventoryManagementReport') }}" id="pagesDropdown">
            <i class="fas fa-fw fa-folder"></i>
            <span>Total Inventory</span>
        </a>
    </li>
</ul>
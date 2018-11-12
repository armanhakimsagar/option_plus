<?php
/**
 * Created by PhpStorm.
 * User: Nayem
 * Date: 08-Nov-18
 * Time: 8:32 AM
 */
?>


<nav class="navbar navbar-expand navbar-dark bg-dark static-top" id="NavBar">
    <button type="button" id="sidebarCollapse" class="btn btn-sm text-white dark-btn">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-4">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category') }}">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('subcategory') }}">Subcategory</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('item') }}">Item</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('unit') }}">Unit</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('img/img_avatar.png')}}" class="CImg rounded-circle">
                <span class="admin-name">{{Session::get('username')}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right bg-dark animated flipInX" aria-labelledby="userDropdown">
                <a class="dropdown-item text-white" href="{{ route('department') }}"><span
                            class="adminpro-icon adminpro-home-admin mx-2"></span>Departments</a>
                <a class="dropdown-item text-white" href="#"><span
                            class="adminpro-icon adminpro-user-rounded mx-2"></span>Add Users</a>
                <a class="dropdown-item text-white" href="#"><span
                            class="adminpro-icon adminpro-money mx-2"></span>User Role</a>
                <a class="dropdown-item text-white" href="{{ route('userManagementController') }}"><span
                            class="adminpro-icon adminpro-settings mx-2"></span>Settings</a>
                <div class="dropdown-divider "></div>
                <a class="dropdown-item text-white" href="{{ route('logout') }}"><span
                            class="adminpro-icon adminpro-locked mx-2"></span>Log Out</a>
            </div>
        </li>
    </ul>
</nav>

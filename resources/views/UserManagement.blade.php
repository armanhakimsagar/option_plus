@extends('master.layout')
@section('middle')
<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
<div id="page-wrapper"><br><br><br>
    <div class="row">
        <div class="col-lg-8">
        @if(session()->has('UserManagementController'))
        <div class="alert alert-success">
            Created Successfully
        </div>
        @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    User Management
                </div>
                <div class="panel-body">
                    <form action="{{ url('registerMethod') }}" method="post">
                        {{ csrf_field() }}
                        Username:
                        <input type="text" class="form-control" name="username"> <br>
                        Password:
                        <input type="password" class="form-control" name="passwords"> <br>

                        <label class="container">Category
                          <input type="checkbox" checked="checked" name="checkbox[]" value="1">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Custemoer
                          <input type="checkbox" name="checkbox[]" value="2">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Supplier
                          <input type="checkbox" name="checkbox[]" value="3">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Unit
                          <input type="checkbox" name="checkbox[]" value="4">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Product
                          <input type="checkbox" name="checkbox[]" value="5">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Purchase
                          <input type="checkbox" name="checkbox[]" value="15">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Purchase Cash Return
                          <input type="checkbox" name="checkbox[]" value="6">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Purchase Repair
                          <input type="checkbox" name="checkbox[]" value="7">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Purchase Damage
                          <input type="checkbox" name="checkbox[]" value="17">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Purchase Management Report
                          <input type="checkbox" name="checkbox[]" value="13">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Sales
                          <input type="checkbox" name="checkbox[]" value="16">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Sales Cash Return
                          <input type="checkbox" name="checkbox[]" value="8">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Sales Repair
                          <input type="checkbox" name="checkbox[]" value="9">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Sales Damage
                          <input type="checkbox" name="checkbox[]" value="10">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">User Management Report
                          <input type="checkbox" name="checkbox[]" value="11">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container">Sales Management Report 
                          <input type="checkbox" name="checkbox[]" value="12">
                          <span class="checkmark"></span>
                        </label>
                        
                        <label class="container">Inventory Management Report
                          <input type="checkbox" name="checkbox[]" value="14">
                          <span class="checkmark"></span>
                        </label>
                        <input type="submit" name="submit" value="Create User" class="btn btn-info">
                    </form>
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
<!-- /#page-wrapper -->

</div>

@endsection
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UserController@index');

Route::post('/LoginCheck','UserController@LoginCheck');

Route::get('/logout','UserController@Logout')->name('logout');

Route::group(['middleware' => 'AdminMiddleware'], function () {

    Route::get('/dashboard','HomeManagement@index')->name('dashboard');	
	
	
	 /* Department View, Insert, Update, Delete */

    Route::get('/department/{data?}','DepartmentController@index')->name('department');

    Route::post('/departmentInsert','DepartmentController@store')->name('departmentStore');

    Route::post('/departmentUpdate/{data}','DepartmentController@update');

    Route::get('/departmentDelete','DepartmentController@delete');
	

    /* Category View, Insert, Update, Delete */

    Route::get('/category/{data?}','CategoryController@index')->name('category');

    Route::post('/CategoryInsert','CategoryController@store');

    Route::post('/CategoryUpdate/{data}','CategoryController@update');

    Route::get('/CategoryDelete','CategoryController@delete');

    /* Sub category View, Insert, Update, Delete */

    Route::get('/subcategory/{data?}','subcategoryController@index')->name('subcategory');

    Route::post('/SubcategoryInsert','subcategoryController@store');

    Route::post('/SubcategoryUpdate/{data}','subcategoryController@update');

    Route::get('/SubcategoryDelete','subcategoryController@delete');

    /* Item View, Insert, Update, Delete */

    Route::get('/item/{data?}','ItemController@index')->name('item');

    Route::post('/ItemInsert','ItemController@ItemInsert');

    Route::post('/ItemUpdate/{data}','ItemController@Update');

    Route::get('/ItemDelete','ItemController@Delete');

    /* Unit View, Insert, Update, Delete */

    Route::get('/unit/{data?}','UnitController@index')->name('unit');

    Route::post('/unitInsert','UnitController@store');

    /* Customer View, Insert, Update, Delete */

    Route::get('/customer','CustomerController@index')->name('customer');

    Route::post('/ClientInsert','CustomerController@store');

    /* Supplier View, Insert, Update, Delete */

    Route::get('/supplier','SupplierController@index')->name('supplier');

    Route::post('/supplierInsert','SupplierController@store');

    /* Product View, Insert, Update, Delete */

    Route::get('/product','ProductController@index')->name('product');

    Route::post('/addProduct','ProductController@store');

    /* Purchase View, Insert, Update, Delete */

    Route::get('/purchase','PurchaseController@index')->name('purchase');

    Route::get('/purchaseOrder','PurchaseController@purchaseOrder')->name('purchaseOrder');

    Route::post('/poInsert','PurchaseController@poInsert');

    Route::get('/PurchaseManagementReport','PurchaseController@PurchaseManagementReport')->name('purchaseManagementReport');

    Route::get('/purchaseOrderApprove/{id}','PurchaseController@purchaseOrderApprove');

    Route::post('/requisitionInsert','PurchaseController@requisitionInsert');

    Route::get('/purchaseInsert','PurchaseController@purchaseInsert');

    Route::get('/purchase_cash_return','PurchaseController@cashReturn')->name('purchaseCashReturn');

    Route::post('/purchaseCashInsert','PurchaseController@purchaseCashInsert');

    Route::get('/purchase_repair','PurchaseController@purchaseRepair')->name('purchaseRepair');

    Route::post('/purchaseRepairInsert','PurchaseController@purchaseRepairInsert');

    Route::get('/purchase_damage','PurchaseController@purchasedamage')->name('purchaseDamage');

    Route::post('/purchaseDamageInsert','PurchaseController@purchaseDamageInsert');

    Route::get('/salesManagementReport','SaleController@salesManagementReport')->name('salesManagementReport');

    Route::get('/inventoryManagementReport','SaleController@inventoryManagementReport')->name('inventoryManagementReport');

    Route::get('/sales','SaleController@index')->name('sales');

    Route::post('/salesInsert','SaleController@salesInsert');

    Route::post('/SalesOrder','SaleController@SalesOrder');

    Route::get('/sales_cash_return','SaleController@salescashReturn')->name('salesCashReturn');

    Route::post('/salesCashInsert','SaleController@salesCashInsert');

    Route::get('/sales_repair','SaleController@salesRepair')->name('salesRepair');

    Route::post('saleRepairInsert','SaleController@saleRepairInsert');

    Route::post('saleDamageInsert','SaleController@saleDamageInsert');

    Route::get('/sales_damage','SaleController@salesdamage')->name('salesDamage');

    Route::get('/UserManagementController','UserController@UserManagementController')->name('userManagementController');

    Route::post('/registerMethod','UserController@registerMethod');

    Route::post('/getRequest','userPermission@index');

    Route::post('/permissionDelete','userPermission@delete');

    Route::post('/permissionStore','userPermission@store');
});
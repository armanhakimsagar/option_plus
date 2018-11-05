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


Route::post('/loginCheck','LoginManagement@loginCheck');

Route::get('/logout','LoginManagement@Logout');

Route::get('/','LoginManagement@index');

Route::group(['middleware' => 'AdminMiddleware'], function () {

	Route::get('/dashboard','HomeManagement@index');

	Route::get('/category','CategoryManagement@index');

	Route::get('/subcategory','subcategoryController@index');

	Route::get('/item','ItemController@index');

	Route::post('/ItemInsert','ItemController@ItemInsert');

	Route::post('/SubcategoryInsert','subcategoryController@SubcategoryInsert');

	Route::post('/CategoryInsert','CategoryManagement@CategoryInsert');

	Route::get('/unit','UnitManagement@index');

	Route::post('/unitInsert','UnitManagement@unitInsert');

	Route::get('/client','ClientManagement@index');

	Route::post('/ClientInsert','ClientManagement@ClientInsert');

	Route::get('/supplier','SupplierManagement@index');

	Route::post('/supplierInsert','SupplierManagement@supplierInsert');

	Route::get('/product','ProductManagement@index');

	Route::post('/addProduct','ProductManagement@addProduct');

	Route::get('/purchase','PurchaseManagement@index');

	Route::get('/purchaseOrder','PurchaseManagement@purchaseOrder');

	Route::post('/poInsert','PurchaseManagement@poInsert');

	Route::get('/PurchaseManagementReport','PurchaseManagement@PurchaseManagementReport');

	Route::get('/purchaseOrderApprove/{id}','PurchaseManagement@purchaseOrderApprove');

	Route::get('/salesManagementReport','SalesManagement@salesManagementReport');

	Route::get('/inventoryManagementReport','SalesManagement@inventoryManagementReport');

	Route::post('/requisitionInsert','PurchaseManagement@requisitionInsert');

	Route::get('/purchaseInsert','PurchaseManagement@purchaseInsert');

	Route::get('/purchase_cash_return','PurchaseManagement@cashReturn');

	Route::post('/purchaseCashInsert','PurchaseManagement@purchaseCashInsert');

	Route::get('/purchase_repair','PurchaseManagement@purchaseRepair');

	Route::post('/purchaseRepairInsert','PurchaseManagement@purchaseRepairInsert');

	Route::get('/purchase_damage','PurchaseManagement@purchasedamage');

	Route::post('/purchaseDamageInsert','PurchaseManagement@purchaseDamageInsert');

	Route::get('/sales','SalesManagement@index');

	Route::post('/salesInsert','SalesManagement@salesInsert');
	
	Route::post('/SalesOrder','SalesManagement@SalesOrder');

	Route::get('/sales_cash_return','SalesManagement@salescashReturn');

	Route::post('/salesCashInsert','SalesManagement@salesCashInsert');
	
	Route::get('/sales_repair','SalesManagement@salesRepair');

	Route::post('saleRepairInsert','SalesManagement@saleRepairInsert');

	Route::post('saleDamageInsert','SalesManagement@saleDamageInsert');

	Route::get('/sales_damage','SalesManagement@salesdamage');

	Route::get('/UserManagementController','LoginManagement@UserManagementController');

	Route::post('/registerMethod','LoginManagement@registerMethod');

});

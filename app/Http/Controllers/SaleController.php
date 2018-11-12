<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\customer;
use App\sale;
use Session;
use App\sale_cash_return;
use App\sale_repair;
use App\sale_damage;
use App\purchase_damage;
use App\purchase_cash_return;
use App\purchase;

class SaleController extends Controller
{
    public function index()
    {
        $product = product::all();
        $customer = customer::all();
        return view('sales', compact('product', 'customer'));
    }

    public function salescashReturn()
    {
        $product = product::all();
        $sale = sale::all();
        $customer = customer::all();
        return view('sales_cash_return', compact('sale', 'customer', 'product'));
    }

    public function salesRepair()
    {
        $product = product::all();
        $sale = sale::all();
        $client = customer::all();
        return view('sales_repair', compact('client', 'sale', 'product'));
    }

    public function salesdamage()
    {
        $product = product::all();
        $sale = sale::all();
        $client = customer::all();
        return view('sales_damage', compact('client', 'sale', 'product'));
    }

    public function salesInsert(Request $request)
    {
        $product = product::all();
        $customer = customer::all();
        $sale = new sale;
        $sale->product_id = $request->product_id;
        $sale->qty = $request->qty;
        $sale->price = $request->price;
        $sale->description = $request->description;
        $sale->vat = $request->vat;
        $sale->discount = $request->discount;
        $sale->net_payable = $request->net_payable;
        $sale->supplier_id = $request->supplier_id;
        $sale->due = $request->due;
        $sale->save();
        Session::flash('sale', 'Inserted Successfully!');
        return view('sales', compact('product', 'customer'));
    }

    public function salesCashInsert(Request $request)
    {

        $sale = sale::all();
        $customer = customer::all();
        $sale_cash_return = new sale_cash_return;
        $sale_cash_return->product_id = $request->product_id;
        $sale_cash_return->product_id = $request->product_id;
        $sale_cash_return->sales_id = $request->sale_id;
        $sale_cash_return->qty = $request->qty;
        $sale_cash_return->cash_return = $request->cashReturn;
        $sale_cash_return->client_id = $request->client_id;
        $sale_cash_return->save();

        Session::flash('sales_cash_return', 'Inserted Successfully!');
        return redirect('sales_cash_return');
    }

    public function saleRepairInsert(Request $request)
    {

        $sale = sale::all();
        $customer = customer::all();
        $sale_repair = new sale_repair;
        $sale_repair->product_id = $request->product_id;
        $sale_repair->sales_id = $request->sale_id;
        $sale_repair->qty = $request->qty;
        $sale_repair->repair_cost = $request->repairCost;
        $sale_repair->client_id = $request->client_id;
        $sale_repair->save();

        Session::flash('sales_repair', 'Inserted Successfully!');
        return redirect('sales_repair');
    }

    public function saleDamageInsert(Request $request)
    {

        $sale = sale::all();
        $customer = customer::all();
        $sale_damage = new sale_damage;
        $sale_damage->product_id = $request->product_id;
        $sale_damage->sales_id = $request->sales_id;
        $sale_damage->qty = $request->qty;
        $sale_damage->damage_cost = $request->damage_cost;
        $sale_damage->client_id = $request->client_id;
        $sale_damage->save();

        Session::flash('sale_damage', 'Inserted Successfully!');
        return redirect('sales_damage');
    }

    public function salesManagementReport()
    {
        $sale = sale::all();
        $sale_damage = sale_damage::all();
        $sale_cash_return = sale_cash_return::all();
        $sale_repair = sale_repair::all();
        $product = product::all();

        return view('salesManagement', compact('sale', 'sale_damage', 'sale_cash_return', 'sale_repair', 'product'));
    }

    public function inventoryManagementReport()
    {
        $sale_damage = sale_damage::all();
        $sale_cash_return = sale_cash_return::all();
        $purchase_damage = purchase_damage::all();
        $purchase_cash_return = purchase_cash_return::all();
        $purchase = purchase::all();
        $sale = sale::all();
        $product = product::all();

        return view('inventory', compact('sale', 'sale_damage', 'sale_cash_return', 'sale_repair', 'product', 'purchase', 'purchase_damage', 'purchase_cash_return'));
    }
}

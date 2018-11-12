<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\supplier;
use App\purchase;
use App\purchase_cash_return;
use App\purchase_repair;
use App\purchase_damage;
use Session;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $product = product::all();
        $supplier = supplier::all();
        return view('purchase',compact('product','supplier'));
    }

    public function purchaseOrder(){
        $purchaseOrder = purchase::where('requisition_status',0)->get();
        return view('purchaseOrder',compact('purchaseOrder'));
    }

    public function poInsert(Request $request){
        $id = $request->id;
        $purchase = purchase::find($id);
        $purchase->product_id = $request->product_id;
        $purchase->invoice = $request->invoice;
        $purchase->qty = $request->qty;
        $purchase->price = $request->price;
        $purchase->description = $request->description;
        $purchase->vat = $request->vat;
        $purchase->tax = $request->tax;
        $purchase->ait = $request->ait;
        $purchase->discount  = $request->discount;
        $purchase->net_payable = $request->net_payable;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->due = $request->due;
        $purchase->requisition_status = 1;
        $purchase->save();

        Session::flash('purchase', 'Inserted Successfully!');
        return redirect('purchase');
    }

    public function purchaseOrderApprove($id){
        $product = product::all();
        $supplier = supplier::all();
        $purchaseOrder = purchase::where('id',$id)->get();
        return view('purchaseOrderApprove',compact('purchaseOrder','product','supplier'));
    }

    public function cashReturn(){
        $product = product::all();
        $purchase = purchase::all();
        $supplier = supplier::all();
        return view('purchase_cash_return',compact('purchase','supplier','product'));
    }
    public function purchaseRepair(){
        $product = product::all();
        $purchase = purchase::all();
        $supplier = supplier::all();
        return view('purchase_repair',compact('purchase','supplier','product'));
    }
    public function purchaseRepairInsert(Request $request){
        $purchase_repair = new purchase_repair;
        $purchase_repair->purchase_id = $request->purchase_id;
        $purchase_repair->product_id = $request->product_id;
        $purchase_repair->qty = $request->qty;
        $purchase_repair->repair_cost= $request->repairCost;
        $purchase_repair->supplier_id = $request->supplier_id;

        $purchase_repair->save();

        Session::flash('purchase_repair', 'Inserted Successfully!');
        return redirect('purchase_repair');
    }
    public function purchasedamage(){
        $product = product::all();
        $purchase = purchase::all();
        $supplier = supplier::all();
        return view('purchase_damage',compact('purchase','supplier','product'));
    }
    public function requisitionInsert(Request $request){
        $purchase = new purchase;
        $purchase->product_id = $request->product_id;
        $purchase->invoice = $request->invoice;
        $purchase->requisition_qty = $request->qty;
        $purchase->price = $request->price;
        $purchase->description = $request->description;
        $purchase->vat = $request->vat;
        $purchase->tax = $request->tax;
        $purchase->ait = $request->ait;
        $purchase->discount  = $request->discount;
        $purchase->net_payable = $request->net_payable;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->due = $request->due;
        $purchase->requisition_status = 0;
        $purchase->requisition_no = rand(1,999).rand(1,100);
        $purchase->save();

        Session::flash('purchase', 'Inserted Successfully!');
        return redirect('purchase');
    }

    public function purchaseCashInsert(Request $request){
        $product = product::all();
        $supplier = supplier::all();
        $purchase_cash_return = new purchase_cash_return;
        $purchase_cash_return->purchase_id = $request->purchase_id;
        $purchase_cash_return->product_id = $request->product_id;
        $purchase_cash_return->qty = $request->qty;
        $purchase_cash_return->cash_return= $request->cashReturn;
        $purchase_cash_return->supplier_id = $request->supplier_id;

        $purchase_cash_return->save();

        Session::flash('purchase_cash_return', 'Inserted Successfully!');
        return redirect('purchase_cash_return');
    }

    public function purchaseDamageInsert(Request $request){
        $purchase_damage = new purchase_damage;
        $purchase_damage->product_id = $request->product_id;
        $purchase_damage->purchase_id = $request->purchase_id;
        $purchase_damage->qty = $request->qty;
        $purchase_damage->damage_cost= $request->damage_cost;
        $purchase_damage->supplier_id = $request->supplier_id;

        $purchase_damage->save();

        Session::flash('purchase_damage', 'Inserted Successfully!');
        return redirect('purchase_damage');
    }

    public function PurchaseManagementReport()
    {
        $purchases = purchase::all();
        $purchase_damage = purchase_damage::all();
        $purchase_cash_return = purchase_cash_return::all();
        $purchase_repair = purchase_repair::all();
        $product = product::all();

        return view('purchaseManagement',compact('purchases','purchase_damage','purchase_cash_return','purchase_repair','product'));
    }
}

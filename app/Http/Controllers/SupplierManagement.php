<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use Session;

class SupplierManagement extends Controller
{
   public function index(){
   		return view('supplier');
   }

   public function supplierInsert(Request $request){
   		$customer = new supplier;
   		$customer->supplier_name = $request->supplierName;
   		$customer->business		 = $request->business;
   		$customer->phone		 = $request->phone;
   		$customer->address 		 = $request->address;
   		$customer->save();

   		Session::flash('supplier', 'Inserted Successfully!'); 
   		return view('supplier');
   }
}

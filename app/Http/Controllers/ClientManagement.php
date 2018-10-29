<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Session;

class ClientManagement extends Controller
{
   public function index(){
   		return view('client');
   }
   public function ClientInsert(Request $request){
   		$customer = new customer;
   		$customer->customer_name = $request->customerName;
   		$customer->business		 = $request->business;
   		$customer->phone		 = $request->phone;
   		$customer->address 		 = $request->address;
   		$customer->save();

   		Session::flash('client', 'Inserted Successfully!'); 
   		return view('client');
   }

}

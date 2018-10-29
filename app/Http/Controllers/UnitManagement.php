<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\unit;
use Session;

class UnitManagement extends Controller
{
   public function index(){
   	return view('unit');
   }

   public function unitInsert(Request $request){
   		$unit = new unit;
   		$unit->unit_name = $request->unitName;
   		$unit->save();

   		Session::flash('unit', 'Inserted Successfully!'); 
   		return view('unit');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\subcategory;
use App\item;
use Session;
use Validator;

class ItemController extends Controller
{
    public function index(){
    	$category 		= category::all();
    	$subcategory 	= subcategory::all();
   		return view('item',compact('category','subcategory'));
   }

   public function ItemInsert(Request $request){
         $validator = Validator::make($request->all(), [
            'item'  => 'required|unique:items'
         ]);
         if ($validator->fails()) {
            return redirect('/item')
                            ->withErrors($validator)
                            ->withInput();
         }else{
      		$item = new item;
      		$item->subcategory_id 	= $request->subcategory_id;
          	$item->category_id      = $request->category_id; 
          	$item->item   	   		= $request->item; 
      		$item->save();

      		Session::flash('item', 'Inserted Successfully!'); 
      		return redirect('item');
         }
   }

}

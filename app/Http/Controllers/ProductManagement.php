<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\subcategory;
use App\item;
use App\unit;
use Session;

class ProductManagement extends Controller
{
   public function index(){
		$category = category::all();
      $subcategory = subcategory::all();
      $item = item::all();
		$unit = unit::all();
		return view('product',compact('unit','category','item','subcategory'));
   }


   public function addProduct(Request $request){
		$product = new product;
		$product->category_id = $request->category_id;
      $product->subcategory_id = $request->subcategory_id;
      $product->item_id = $request->item_id;
		$product->name = $request->name;
		$product->description = $request->description;
		$product->unit_id = $request->unitid;
		$product->save();

		Session::flash('product', 'Inserted Successfully!'); 
		return redirect('product');
   }



}

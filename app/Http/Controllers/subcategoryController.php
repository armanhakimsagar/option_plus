<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\subcategory;
use Validator;
use Session;

class subcategoryController extends Controller
{
   public function index(){
    	$category = category::all();
   		return view('subcategory',compact('category'));
   }

   public function SubcategoryInsert(Request $request){
         $validator = Validator::make($request->all(), [
            'subcategory'  => 'required|unique:subcategories'
         ]);
         if ($validator->fails()) {
            return redirect('/subcategory')
                            ->withErrors($validator)
                            ->withInput();
         }else{
      		$subcategory = new subcategory;
      		$subcategory->subcategory = $request->subcategory;
          $subcategory->category_id      = $request->category_id; 
      		$subcategory->save();

      		Session::flash('subcategory', 'Inserted Successfully!'); 
      		return redirect('subcategory');
         }
   }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Session;
use Validator;


class CategoryManagement extends Controller
{
   public function index(){
   		return view('category');
   }

   public function CategoryInsert(Request $request){
         $validator = Validator::make($request->all(), [
            'category_name'  => 'required|unique:categories'
         ]);
         if ($validator->fails()) {
            return redirect('/category')
                            ->withErrors($validator)
                            ->withInput();
         }else{
      		$category = new category;
      		$category->category_name = $request->category_name;
      		$category->save();

      		Session::flash('category', 'Inserted Successfully!'); 
      		return view('category');
         }
   }

}

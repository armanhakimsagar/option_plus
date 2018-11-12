<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\subcategory;
use App\item;
use App\unit;

class HomeManagement extends Controller
{
    public function index(){
        $category = category::all();
        $subcategory = subcategory::all();
        $item = item::all();
        $unit = unit::all();
        return view('index',compact('category','subcategory', 'item', 'unit'));
    }
}

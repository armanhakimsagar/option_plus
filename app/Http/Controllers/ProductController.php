<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\category;
use App\subcategory;
use App\item;
use App\unit;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $category = category::all();
        $subcategory = subcategory::all();
        $item = item::all();
        $unit = unit::all();
        return view('product',compact('unit','category','item','subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($data = false)
    {
        $item = item::leftJoin('subcategories', 'items.subcategory_id', '=', 'subcategories.id')
            ->leftJoin('categories', 'items.category_id', '=', 'categories.id')
            ->select('items.id', 'subcategories.subcategory', 'items.updated_at', 'categories.category_name', 'items.item')
            ->orderBy('item', 'asc')->get();
        $category = category::all();
        $subcategory = subcategory::all();
        if ($data) {
            $itemUpdate = item::find($data);
            return view('item', compact('category', 'subcategory', 'item', 'itemUpdate'));
        } else {
            return view('item', compact('category', 'subcategory', 'item'));
        }

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

    /**
     * Display the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$data)
    {
        $validator = Validator::make($request->all(), [
            'item'  => 'required|unique:items'
        ]);
        if ($validator->fails()) {
            return redirect('/item')
                ->withErrors($validator)
                ->withInput();
        }else{
            $item = item::find($data);
            $item->subcategory_id 	= $request->subcategory_id;
            $item->category_id      = $request->category_id;
            $item->item   	   		= $request->item;
            $item->save();

            Session::flash('item', 'Inserted Successfully!');
            return redirect('item');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function Delete(Request $request)
    {
        $item = item::find($request->delete);
        $item->delete();
        return redirect('item');
    }
}

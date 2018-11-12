<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\subcategory;
use Validator;
use Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($data = false)
    {
        $subcategory = subcategory::leftJoin('categories', 'subcategories.category_id', '=', 'categories.id')
            ->select('subcategories.id','subcategories.subcategory','subcategories.updated_at','categories.category_name')
            ->orderBy('subcategory', 'asc')->get();
        $category = category::all();
        if ($data) {
            $subcategoryUpdate = subcategory::find($data);
            return view('subcategory', compact('subcategory', 'subcategoryUpdate', 'category'));
        } else {
            return view('subcategory', compact('subcategory', 'category'));
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subcategory' => 'required|unique:subcategories'
        ]);
        if ($validator->fails()) {
            return redirect('/subcategory')
                ->withErrors($validator)
                ->withInput();
        } else {
            $subcategory = new subcategory;
            $subcategory->subcategory = $request->subcategory;
            $subcategory->category_id = $request->category_id;
            $subcategory->save();

            Session::flash('subcategory', 'Inserted Successfully!');
            return redirect('subcategory');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $data)
    {
        $validator = Validator::make($request->all(), [
            'subcategory' => 'required|unique:subcategories'
        ]);
        if ($validator->fails()) {
            return redirect('/subcategory')
                ->withErrors($validator)
                ->withInput();
        } else {
            $subcategory = subcategory::find($data);
            $subcategory->subcategory = $request->subcategory;
            $subcategory->category_id = $request->category_id;
            $subcategory->save();

            Session::flash('subcategory', 'Inserted Successfully!');
            return redirect('subcategory');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $subcategory = subcategory::find($request->delete);
        $subcategory->delete();
        return redirect('/subcategory');
    }
}

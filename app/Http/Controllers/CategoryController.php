<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Session;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($data = false){
        if ($data){
            $category = category::all();
            $categoryUpdate = category::find($data);
            return view('category',compact('category','categoryUpdate'));
        }else{
            $category = category::all();
            return view('category',compact('category'));
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
            return redirect('/category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$data){
        $validator = Validator::make($request->all(), [
            'category_name'  => 'required|unique:categories'
        ]);
        if ($validator->fails()) {
            return redirect('/category')
                ->withErrors($validator)
                ->withInput();
        }else{
            $category = category::find($data);
            $category->category_name = $request->category_name;
            $category->save();

            Session::flash('category', 'Update Successfully!');
            return redirect('/category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request){
        $category = category::find($request->delete);
        $category->delete();
        return redirect('/category');
    }
}

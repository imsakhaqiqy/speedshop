<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Category;
use App\Family;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $families = Family::lists('name','id');
        return view('category.create')
          ->with('families',$families);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = New Category;
        $category->name = $request->name;
        $category->family_id = $request->family_id;
        $category->creator = \Auth::user()->id;
        $category->deleted = 0;
        $category->save();
        return redirect('category')
          ->with('successMessage', 'Category has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $families = Family::lists('name','id');
        return view('category.edit')
           ->with('category', $category)
           ->with('families', $families);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->family_id = $request->family_id;
        $category->creator = \Auth::user()->id;
        $category->save();
        return redirect('category/'.$id.'/edit')
           ->with('successMessage', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $category = Category::findOrFail($request->category_id);
      $category->deleted = 1;
      $category->save();
      return redirect('category')
        ->with('successMessage', "Category $category->name has been deleted");
    }
}

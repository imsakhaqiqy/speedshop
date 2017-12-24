<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FamilieStoreRequest;
use App\Http\Requests\FamilieUpdateRequest;
use App\Family;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('family.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('family.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamilieStoreRequest $request)
    {
        $families = New Family;
        $families->name = $request->name;
        $families->creator = \Auth::user()->id;
        $families->deleted = 0;
        $families->save();
        return redirect('family')
          ->with('successMessage', 'family has been added');
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
        $family = Family::findOrFail($id);
        return view('family.edit')
          ->with('family', $family);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FamilieUpdateRequest $request, $id)
    {
        $families = Family::findOrFail($id);
        $families->name = $request->name;
        $families->creator = \Auth::user()->id;
        $families->deleted = 0;
        $families->save();
        return redirect('family/'.$id.'/edit')
          ->with('successMessage', 'Family has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $families = Family::findOrFail($request->family_id);
        $families->deleted = 1;
        $families->save();
        return redirect('family')
          ->with('successMessage', "Family $families->name has been deleted");
    }
}

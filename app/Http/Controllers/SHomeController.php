<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use App\Family;
use App\Product;

class SHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotlist = \DB::table('products')->limit(5)->get();
        $new_arrival = \DB::table('products')->limit(5)->offset(5)->get();
        $family = \DB::table('families')->get();
        $feature_collection = \DB::table('products')->limit(3)->offset(5)->get();

        // echo "<pre>";
        // print_r($family);
        // echo "</pre>";
        // exit;
        return view('s_home.index')
          ->with('family',$family)
          ->with('hotlist',$hotlist)
          ->with('feature_collection',$feature_collection)
          ->with('new_arrival',$new_arrival);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function keluar() {
        Auth::logout();
        return view('s_home.speedshop');
    }
}

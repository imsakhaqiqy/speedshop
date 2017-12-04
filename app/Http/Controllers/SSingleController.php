<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Chart;

class SSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $p = $request->p;
        $products = \DB::table('products')->where('name',$p)->get();
        // echo "<pre>";
        // print_r($category);
        // echo "</pre>";
        // exit;
        return view('single.index')
          ->with('p',$p)
          ->with('products',$products);
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
        $products_id = $request->product_id;
        $product = \DB::table('products')->where('id',$products_id)->value('id');
        $quantity = $request->quantity;
        $customer = Auth::user()->id;
        $chart = new Chart;
        $chart->product_id = $product;
        $chart->quantity = $quantity;
        $chart->customer_id = 1;
        $chart->status = 0;
        $chart->deleted = 0;
        $chart->save();
        echo "<pre>";
        print_r($quantity);
        echo "</pre>";
        exit;
        return redirect();
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
}

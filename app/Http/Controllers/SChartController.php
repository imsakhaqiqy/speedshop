<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\DB;
use App\Chart;
use App\User;
use App\Product;

class SChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest()){
            $charts = '';
        }else{
            $id_customer = \DB::table('customers')->where('id_user',Auth::user()->id)->value('id');
            $charts = \DB::table('charts')->select('*',\DB::raw('sum(quantity) as quantity'))->where('customer_id',$id_customer)->groupBy('product_id')->get();
            // echo "<pre>";
            // print_r($charts);
            // echo "</pre>";
            // exit;
        }
        return view('chart.index')
          ->with('charts',$charts);
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
        $product_arr = [];
        foreach ($request->product as $key => $value) {
          $product_arr[$value] = [
            'product_id' => $request->product[$key],
            'quantity'   =>  $request->quantity[$key],
          ];
        }
        // echo "<pre>";
        // print_r($product_arr);
        // echo "</pre>";
        // exit;
        $customer = \DB::table('customers')->where('id_user',Auth::user()->id)->get();
        $customer_email = User::findOrFail($customer[0]->id_user);
        // echo "<pre>";
        // print_r($customer);
        // echo "</pre>";
        // exit;
        return view('s_pembayaran.index')
          ->with('customer',$customer)
          ->with('customer_email',$customer_email)
          ->with('product_arr',$product_arr);
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

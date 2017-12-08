<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use DB;
use Auth;
use App\User;
use App\Http\Requests;
use App\Order;

class SPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('s_pembayaran.index');
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


      // # Instantiate the client.
      // $mgClient = new Mailgun('key-7f5ea6e82e0f5dacccae1d83965a86f2');
      // $domain = "sandboxcf8ac8a8838244f39e5f5590d55698e4.mailgun.org";
      //
      // # Make the call to the client.
      // $result = $mgClient->sendMessage($domain, array(
      //   'from'    => 'SpeedShop <no-reply@speedshop.com>',
      //   'to'      => 'Imsak Haqiqy <imsakhaqiqy24@gmail.com',
      //   'subject' => 'Hello',
      //   'text'    => 'Testing some Mailgun awesomness!'
      // ));
      // Mail::raw('Sending emails with Mailgun and laravel is easy!', function($message){
      //       $message->subject('Notif');
      //       $message->from('no-reply@iconspeedshop.com','Icon SpeedShop');
      //       $message->to('imsakhaqiqy24@gmail.com');
      // });
      $name = $request->name;
      $hp = $request->hp;
      $email = $request->email;

      $order_id = date('Ymd');
      $customer_id = \DB::table('customers')->where('id_user',Auth::user()->id)->value('id');
      //print_r($customer_id);
      // exit;
      $order = new Order;
      $order->order_id = $order_id;
      $order->customer_id = $customer_id;
      $order->address = $request->address;
      $order->delivery_method = $request->delivery_method;
      $order->payment_method = $request->payment_method;

      $postal_fee = 0;
      if($request->delivery_method == 'jne'){
        $postal_fee = 9000;
      }else if($request->delivery_method == 'jnt'){
        $postal_fee = 10000;
      }else{
        $postal_fee = 15000;
      }
      $order->postal_fee = $postal_fee;

      $order->deleted = 0;
      $order->save();
      if($order->id < 10){
        $str_pad = "000$order->id";
      }elseif ($order->id > 9 && $order->id < 100) {
        $str_pad = "00$order->id";
      }elseif($order->id > 100 && $order->id < 1000){
        $str_pad = "0$order->id";
      }elseif ($order->id > 1000 && $order->id < 10000) {
        $str_pad = "$order->id";
      }
      $str_update = $order_id.$str_pad;;
      \DB::table('orders')->where('id',$order->id)->update(['order_id'=>$str_update]);
      $arr_product = [];
      foreach ($request->product_id_cart as $key=>$value) {
        $arr_product[$value] = [
          'product_id'=>$request->product_id_cart[$key],
          'quantity'=>$request->quantity_cart[$key],
          'price_per_item'=>$request->price_per_item[$key],
          'order_id'=>$order->id,
          'created_at'=>date('Y-m-d h:i:s'),
          'updated_at'=>date('Y-m-d h:i:s'),
          'deleted'=>0
          ];
      }
      \DB::table('order__details')->insert($arr_product);

      foreach ($request->product_id_cart as $key=>$value) {
        \DB::table('products')->where('id',$request->product_id_cart[$key])->update(['stock'=>\DB::table('products')->where('id',$request->product_id_cart[$key])->value('stock')-$request->quantity[$key]]);
        $arr_product[$value] = [
          'product_id'=>$request->product_id_cart[$key],
          'quantity'=>$request->quantity_cart[$key],
          'order_id'=>$order->id,
          'created_at'=>date('Y-m-d h:i:s'),
          'updated_at'=>date('Y-m-d h:i:s'),
          'deleted'=>0
          ];
      }

      //
      $user =1;
      Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to('imsakhaqiqy24@gmail.com', '')->subject('Your Order!');
        });
      return redirect('speedshop');
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

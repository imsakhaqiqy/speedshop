<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Order_Detail;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['order_id','customer_id','address','delivery_method','payment_method','postal_fee','deleted'];

    public function order_details(){
      return $this->hasMany('App\Order_Detail','order_id');
    }
}

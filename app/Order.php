<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['order_id','customer_id','address','delivery_method','payment_method','postal_fee','deleted'];


}

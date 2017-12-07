<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = ['product_id','quantity','price_per_item','order_id'];
}

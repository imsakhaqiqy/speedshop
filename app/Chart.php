<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Chart;

class Chart extends Model
{
    protected $table = 'charts';

    protected $fillable = ['product_id','quantity','customer_id','status','deleted'];
    
}

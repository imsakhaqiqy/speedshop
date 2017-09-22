<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Family;
use App\Category;
use App\Units;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'image', 'description', 'stock', 'minimum_stock', 'family_id', 'category_id', 'unit_id', 'creator', 'deleted'];

    public function family(){
      return $this->belongsTo('App\Family', 'family_id');
    }

    public function category(){
      return $this->belongsTo('App\Category', 'category_id');
    }

    public function unit(){
      return $this->belongsTo('App\Units', 'unit_id');
    }
}

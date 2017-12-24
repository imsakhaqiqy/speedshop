<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Family;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','family_id','creator','deleted'];

    public function user(){
      return $this->belongsTo('App\User', 'creator');
    }

    public function family(){
      return $this->belongsTo('App\Family', 'family_id');
    }
}

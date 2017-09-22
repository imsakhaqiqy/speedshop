<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Family extends Model
{
    protected $table = 'families';

    protected $fillable = ['name','creator','deleted'];

    public function user(){
      return $this->belongsTo('App\User', 'creator');
    }
}

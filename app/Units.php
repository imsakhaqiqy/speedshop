<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Units extends Model
{
    protected $table='units';

    protected $fillable=['name','creator','deleted'];

    public function users(){

    	return $this->belongsTo('App\User','creator');

    }  
}

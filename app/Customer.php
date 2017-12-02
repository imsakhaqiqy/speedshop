<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Customer extends Model
{
    protected $table = 'customers'; 
    protected $fillable = [
        'id_user', 'name', 'phone', 'creator', 'deleted'
    ];

    public function user(){

    	return $this->belongsTo('App\User', 'id');
    }
}

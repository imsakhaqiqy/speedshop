<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfirmationPayment extends Model
{
    protected $table = 'confirmation_payments';

    protected $fillable = ['order_id','transfer_date','transfer_name','amount','status','deleted'];
}

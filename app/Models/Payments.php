<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    public $fillable = ['package_id','transaction_id','currency_code','payment_status'];
}

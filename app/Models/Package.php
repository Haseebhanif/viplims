<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'title',
        'price',
        'period',
        'features',
        'paypal_plan_id',
        'response'
    ];

    public static function GetByID($id)
    {
        return self::find($id);
    }
    public static function GetByPrice($condition,$price)
    {
        return self::where('price',''.$condition.'',$price)->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category',
        'type',
        'image_url',
        'home_url',
        'product_url',
        'response'
    ];
}

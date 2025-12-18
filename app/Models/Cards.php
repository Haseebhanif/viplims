<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $fillable = [
        'type',
        'text',
        'title',
        'status',
        'link'
    ];

}

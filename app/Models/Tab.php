<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable = ['title',
        'text',
        'status',
        'link'];
}

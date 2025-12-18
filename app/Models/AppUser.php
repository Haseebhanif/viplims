<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function package()
    {
        return $this->belongsToMany(Package::class, 'package_id');
    }


}

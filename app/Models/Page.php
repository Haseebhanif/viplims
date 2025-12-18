<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    public static function GetByParentPage($parent_id)
    {
        return self::where('parent_page', $parent_id)->get()->sortBy('priority');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'expiring_date',
        'subscription_status',
        'status_change_note',
        'response'
    ];


    public static function GetByUserId($id)
    {
        return self::where('user_id', $id)->get();
    }

    public static function GetByUserAndId($user_id, $id)
    {
        return self::where('user_id', $user_id)->where('id', $id)->first();
    }

    public static function GetByUserIdAndStatus($user_id, $status)
    {
        return self::where('user_id', $user_id)->where('subscription_status', $status)->first();
    }

    public static function GetCountUser($package_id)
    {
        return self::where('package_id', $package_id)->count();
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function package(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}

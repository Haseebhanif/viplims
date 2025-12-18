<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('users', static function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type',30)->nullable();
            $table->string('role')->nullable();
            $table->boolean('paypal')->default(0)->nullable();
            $table->boolean('status')->default(1)->nullable();
            $table->string('avatar',255)->nullable();
            $table->string('avatar_original',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('country',30)->nullable();
            $table->string('city',30)->nullable();
            $table->string('postal_code',20)->nullable();
            $table->string('phone',20)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('users');
    }
}

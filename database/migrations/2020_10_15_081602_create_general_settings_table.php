<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('general_settings', static function (Blueprint $table) {
            $table->id();
            $table->string('logo', 255)->nullable();
            $table->string('admin_logo', 255)->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('admin_login_background', 255)->nullable();
            $table->string('admin_login_sidebar', 255)->nullable();
            $table->string('site_name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('email', 255)->nullable();

            $table->string('h_img', 255)->nullable()->default(0);
            $table->string('heading_colour', 255)->nullable();
            $table->string('text_colour', 255)->nullable();
            $table->string('button_colour', 255)->nullable();

            $table->string('facebook', 800)->nullable();
            $table->string('instagram', 800)->nullable();
            $table->string('twitter', 800)->nullable();
            $table->string('youtube', 800)->nullable();
            $table->text('paypal_response')->nullable();
            $table->string('google_plus', 800)->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}

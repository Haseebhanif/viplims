<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('package_id');
            $table->date('expiring_date')->nullable();
            $table->enum('subscription_status',['APPROVAL_PENDING','APPROVED',' ACTIVE','SUSPENDED','CANCELLED','EXPIRED'])->nullable();
            $table->string('subscription_id')->nullable();
            $table->string('status_change_note')->nullable();
            $table->text('response')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_packages');
    }
}

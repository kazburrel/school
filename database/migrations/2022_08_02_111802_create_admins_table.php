<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_unique_id')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('join_date');
            $table->string('password');
            $table->string('gender');
            $table->string('mobile_no');
            $table->string('birth_date');
            $table->string('address');
            $table->string('admin_avatar');
            $table->string('education');
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
        Schema::dropIfExists('admins');
    }
};

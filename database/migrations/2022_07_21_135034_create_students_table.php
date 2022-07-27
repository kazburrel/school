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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('reg_no');
            $table->string('email');
            $table->string('reg_date');
            $table->string('department');
            $table->string('gender');
            $table->string('mobile_no');
            $table->string('parent_name');
            $table->string('parents_no');
            $table->string('birth_date');
            $table->string('address');
            $table->string('blood_g');
            $table->string('pro_pic');
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
        Schema::dropIfExists('students');
    }
};

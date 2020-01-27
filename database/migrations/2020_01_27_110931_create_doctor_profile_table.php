<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('abstract');
            $table->string('address');
            $table->bigInteger('price');
            $table->unsignedBigInteger('doctor_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('users');
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
        Schema::dropIfExists('doctor_profile');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patientName');
            $table->date('date');
            $table->softDeletes();
            $table->string('phone');
            $table->unsignedBigInteger('patient_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('patient_id')->references('id')->on('users');
            $table->unsignedBigInteger('reveal_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('reveal_id')->references('id')->on('reveal_time');
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
        Schema::dropIfExists('reservation');
    }
}

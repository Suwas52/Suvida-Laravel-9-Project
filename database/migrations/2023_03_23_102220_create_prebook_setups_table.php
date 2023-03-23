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
        Schema::create('prebook_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')->references('id')->on('vehicle_models')->onDelete('cascade');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('launch_date');
            $table->integer('limit_no');  
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
        Schema::dropIfExists('prebook_setups');
    }
};
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
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->integer('vehicle_id');
            $table->integer('category_id');
            $table->string('model_name');
            $table->string('model_slug');
            $table->string('model_no')->nullable();
            $table->string('model_thumbnail');
            $table->string('model_color');
            $table->string('engine_type');
            $table->string('displacement');
            $table->string('fuel_supply')->nullable();
            $table->string('max_power');
            $table->string('max_torque');
            $table->string('mileage');
            $table->string('starting')->nullable();
            $table->string('body_type')->nullable();
            $table->string('cooling_system')->nullable();
            $table->string('fuel_capacity')->nullable();
            $table->string('braking_type')->nullable();
            $table->string('speedometer')->nullable();
            $table->string('techometer')->nullable();
            $table->string('odometer')->nullable();
            $table->string('fuel_gauge')->nullable();
            $table->string('tripmeter')->nullable();
            $table->string('gear_box')->nullable();
            $table->string('emission_type');
            $table->string('weight');
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('saddle_height')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('length')->nullable();
            $table->string('headlight')->nullable();
            $table->string('tail_light')->nullable();
            $table->string('seat_type')->nullable();
            $table->string('brake_front')->nullable();
            $table->string('brake_rear')->nullable();
            $table->string('suspension_front')->nullable();
            $table->string('suspension_rear')->nullable();
            $table->string('tyre_front')->nullable();
            $table->string('tyre_rear')->nullable();
            $table->string('riding_mode')->nullable();
            $table->string('rain_mode')->nullable();
            $table->string('abs')->nullable();
            $table->string('top_speed')->nullable();
            $table->text('description')->nullable();
            $table->string('price');
            $table->integer('offer')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('vehicle_models');
    }
};
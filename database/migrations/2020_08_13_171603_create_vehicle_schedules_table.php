<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id')->default(0);
            $table->string('register_number')->nullable();
            $table->string('color')->nullable();
            $table->time('start_time')->nullable();
            $table->enum('four_hour',['yes','no'])->default('yes');
            $table->enum('eight_hour',['yes','no'])->default('yes');
            $table->enum('full_day',['yes','no'])->default('yes');
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('vehicle_schedules');
    }
}

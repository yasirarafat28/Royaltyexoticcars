<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSixHourToVehicleSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle_schedules', function (Blueprint $table) {
            $table->enum('six_hour',['yes','no'])->default('yes');
            $table->enum('twelve_hour',['yes','no'])->default('yes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_schedules', function (Blueprint $table) {
            //
        });
    }
}

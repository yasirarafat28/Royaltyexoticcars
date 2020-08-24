<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSixHourToVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->enum('six_hour',['yes','no'])->default('no');
            $table->double('six_hour_price')->default(0);;
            $table->double('six_hour_discount')->default(0);;
            $table->enum('twelve_hour',['yes','no'])->default('no');
            $table->double('twelve_hour_price')->default(0);;
            $table->double('twelve_hour_discount')->default(0);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
}

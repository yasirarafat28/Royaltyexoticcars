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
            $table->enum('six_hour',['yes','no'])->default('yes');
            $table->string('six_hour_price');
            $table->string('six_hour_discount');
            $table->enum('twelve_hour',['yes','no'])->default('yes');
            $table->string('twelve_hour_price');
            $table->string('twelve_hour_discount');
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

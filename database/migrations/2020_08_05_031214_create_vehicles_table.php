<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->default(0);
            $table->integer('sub_category_id')->default(0);
            $table->integer('brand_id')->default(0);
            $table->string('type')->default('super_car');
            $table->text('feature_image')->nullable();
            $table->text('additional_image')->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->string('model')->nullable();
            $table->string('body')->nullable();
            $table->string('color')->nullable();
            $table->string('vehicle_class')->nullable();
            $table->string('horse_power')->nullable();
            $table->string('torque')->nullable();
            $table->string('transmission')->nullable();
            $table->string('seat')->nullable();
            $table->string('driver_wheel')->nullable();
            $table->string('actual_msrp')->nullable();
            $table->string('suspension')->nullable();
            $table->string('clearance')->nullable();
            $table->string('differential')->nullable();
            $table->string('gear_ratio')->nullable();

            $table->enum('four_hour',['yes','no'])->default('yes');
            $table->double('four_hour_price')->default(0);
            $table->double('four_hour_discount')->default(0);

            $table->enum('eight_hour',['yes','no'])->default('yes');
            $table->double('eight_hour_price')->default(0);
            $table->double('eight_hour_discount')->default(0);

            $table->enum('full_day',['yes','no'])->default('yes');
            $table->double('full_day_price')->default(0);
            $table->double('full_day_discount')->default(0);


            $table->dateTime('available_from')->nullable();
            $table->dateTime('available_to')->nullable();
            $table->integer('stock')->default(1);
            $table->string('tax_id')->default(0);

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
        Schema::dropIfExists('vehicles');
    }
}

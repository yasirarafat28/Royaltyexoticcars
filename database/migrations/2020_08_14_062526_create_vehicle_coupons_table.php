<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_coupons', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('code')->nullable();
            $table->text('type')->nullable();
            $table->text('item_id')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->double('min_required_amount')->default(0);
            $table->enum('discount_type',['flat','percent'])->default('flat');
            $table->double('discount')->default(0);
            $table->double('max_discount_amount')->default(0);
            $table->text('note')->nullable();
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
        Schema::dropIfExists('vehicle_coupons');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_checkouts', function (Blueprint $table) {
            $table->id();

            $table->string('txn_id')->nullable();
            $table->integer('customer_id')->default(0);
            $table->integer('vehicle_id')->default(0);
            $table->integer('schedule_id')->default(0);
            $table->dateTime('reservation_time')->nullable();
            $table->string('reservation_for')->default('four_hour');
            $table->text('primary_driver_name')->nullable();
            $table->text('additional_driver_name')->nullable();
            $table->text('country')->nullable();
            $table->double('international_full_coverage_insurance')->default(0);
            $table->double('liability_insurance')->default(0);
            $table->double('property_damage_waiver')->default(0);
            $table->double('tire_protection')->default(0);
            $table->double('mechanical_breakdown_coverage')->default(0);
            $table->double('gas_credit')->default(0);
            $table->string('destination_package')->nullable();
            $table->string('strip_helicopter_tour')->nullable();
            $table->text('customer_note')->nullable();
            $table->text('voucher_code')->nullable();
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('total')->nullable();
            $table->text('tax')->nullable();
            $table->text('discount')->nullable();
            $table->text('grand_total')->nullable();
            $table->text('payment_method')->nullable();
            $table->text('payment_status')->nullable();
            $table->text('paypal_payment_id')->nullable();
            $table->string('status')->default('temporary');

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
        Schema::dropIfExists('vehicle_checkouts');
    }
}

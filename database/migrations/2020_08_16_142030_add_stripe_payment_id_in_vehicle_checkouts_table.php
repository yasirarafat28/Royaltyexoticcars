<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStripePaymentIdInVehicleCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle_checkouts', function (Blueprint $table) {
            //
            $table->text('stripeToken')->nullable();
            $table->text('stripeTokenType')->nullable();
            $table->text('stripe_payment_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_checkouts', function (Blueprint $table) {
            //
        });
    }
}

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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();

            $table->text('primary_driver_name')->nullable();
            $table->text('additional_driver_name')->nullable();
            $table->text('country')->nullable();
            $table->text('property_damage_waiver')->nullable();
            $table->text('true_protection')->nullable();
            $table->text('breakdown_insurance')->nullable();
            $table->text('prepaid_gas_credit')->nullable();
            $table->text('destination_package')->nullable();
            $table->text('strip_helicopter_tour')->nullable();
            $table->boolean('age_over_25')->default(1);
            $table->boolean('drivers_license')->default(1);
            $table->boolean('accept_policy')->default(1);
            $table->boolean('accept_refund_policy')->default(1);
            $table->boolean('accept_return_policy')->default(1);
            $table->boolean('accept_reservation_change')->default(1);
            $table->boolean('accept_resposibilty')->default(1);
            $table->text('customer_note')->nullable();
            $table->text('gift_card_number')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('customer_email')->nullable();
            $table->text('card_owner_name');
            $table->text('card_number');
            $table->text('expiration_month')->nullable();
            $table->text('expiration_year')->nullable();
            $table->text('CVV')->nullable();
            $table->text('grand_total')->nullable();

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
        Schema::dropIfExists('checkouts');
    }
}

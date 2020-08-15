<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('car_suv')->comment('car_suv','auto_moto');
            $table->string('local_age')->default(0);
            $table->string('local_driving_licence')->default('United States Driving Licence');
            $table->string('local_insurance')->default(0);
            $table->string('local_liability_insurance')->default(0);
            $table->string('local_property_damage_waiver')->default(0);
            $table->string('local_tire_protection')->default(0);
            $table->string('local_mechanical_breakdown_coverage')->default(0);
            $table->string('local_fuel_credit')->default(0);

            $table->string('international_age')->default(0);
            $table->string('international_driving_licence')->default('United States Driving Licence');
            $table->string('international_insurance')->default(0);
            $table->string('international_full_coverage_insurance_d1')->default(0);
            $table->string('international_full_coverage_insurance_d2')->default(0);
            $table->string('international_property_damage_waiver')->default(0);
            $table->string('international_tire_protection')->default(0);
            $table->string('international_mechanical_breakdown_coverage')->default(0);
            $table->string('international_fuel_credit')->default(0);
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
        Schema::dropIfExists('vehicle_requirements');
    }
}

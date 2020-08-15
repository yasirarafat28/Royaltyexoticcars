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

        \Illuminate\Support\Facades\DB::table('vehicle_requirements')->insert([
            'type'=>'car_suv',
            'local_age'=>'25',
            'local_driving_licence'=>'United States Drivers License',
            'local_insurance'=>'Camp/ Collision 100/300/500 ',
            'local_liability_insurance'=>'99',
            'local_property_damage_waiver'=>'99',
            'local_tire_protection'=>'49',
            'local_mechanical_breakdown_coverage'=>'99',
            'local_fuel_credit'=>'99',
            'international_age'=>'25',
            'international_driving_licence'=>'International Drivers License',
            'international_insurance'=>'199 Royalty Insurance',
            'international_full_coverage_insurance_d1'=>'199',
            'international_full_coverage_insurance_d2'=>'398',
            'international_property_damage_waiver'=>'99',
            'international_tire_protection'=>'49',
            'international_mechanical_breakdown_coverage'=>'99',
            'international_fuel_credit'=>'99',
        ]);

        \Illuminate\Support\Facades\DB::table('vehicle_requirements')->insert([
            'type'=>'auto_moto',
            'local_age'=>'21',
            'local_driving_licence'=>'United States Drivers License',
            'local_insurance'=>'29 Royalty Insurance ',
            'local_liability_insurance'=>'0',
            'local_property_damage_waiver'=>'49',
            'local_tire_protection'=>'35',
            'local_mechanical_breakdown_coverage'=>'49',
            'local_fuel_credit'=>'49',
            'international_age'=>'25',
            'international_driving_licence'=>'International Drivers License',
            'international_insurance'=>'29 Royalty Insurance',
            'international_full_coverage_insurance_d1'=>'29',
            'international_full_coverage_insurance_d2'=>'58',
            'international_property_damage_waiver'=>'49',
            'international_tire_protection'=>'35',
            'international_mechanical_breakdown_coverage'=>'49',
            'international_fuel_credit'=>'49',
        ]);
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

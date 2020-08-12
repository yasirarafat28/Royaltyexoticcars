<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgToSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setting', function (Blueprint $table) {
            $table->text('slide_img')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('tweeet_link')->nullable();
            $table->text('insta_link')->nullable();
            $table->text('pinter_link')->nullable();
            $table->text('utube_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->enum('transaction_type',['incoming','outgoing'])->default('incoming');
            $table->double('amount')->default(0);
            $table->char('flag')->nullable();
            $table->text('note')->nullable();
            $table->enum('status',['pending','cancelled','confirmed'])->default('pending');
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
        Schema::dropIfExists('gift_cards');
    }
}

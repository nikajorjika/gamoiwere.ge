<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BankCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_card', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('card_code');
            $table->string('expire_date');
            $table->timestamps();
        });
        Schema::create('user_card', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user_g')->onDelete('cascade');
            $table->integer('bank_card_id')->unsigned();
            $table->foreign('bank_card_id')->references('id')->on('bank_card')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bank_card');
    }
}

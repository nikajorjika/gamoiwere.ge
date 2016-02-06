<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemColors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->integer('item_id')->unsigned()->nullable;
            $table->foreign('item_id')->references('id')->on('album')->onDelete('cascade');
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
        Schema::drop('item_colors');
    }
}

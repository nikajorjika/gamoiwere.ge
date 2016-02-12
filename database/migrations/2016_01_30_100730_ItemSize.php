<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_size', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('size');
            $table->timestamps();
        });
        Schema::create('item_item_color', function (Blueprint $table) {
            $table->integer('items_id')->unsigned();
            $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');
            $table->integer('item_colors_id')->unsigned();
            $table->foreign('item_colors_id')->references('id')->on('item_colors')->onDelete('cascade');
        });
        Schema::create('item_item_size', function (Blueprint $table) {
            $table->integer('items_id')->unsigned();
            $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');
            $table->integer('item_size_id')->unsigned();
            $table->foreign('item_size_id')->references('id')->on('item_size')->onDelete('cascade');
        });
        Schema::create('item_subcategory', function (Blueprint $table) {
            $table->integer('items_id')->unsigned();
            $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategory')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_size');
        Schema::drop('item_item_color');
        Schema::drop('item_item_size');
        Schema::drop('item_subcategory');
    }
}

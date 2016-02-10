<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_geo');
            $table->string('title_eng');
            $table->string('title_rus');
            $table->string('content_geo');
            $table->string('content_eng');
            $table->string('content_rus');
            $table->string('main_image');
            $table->string('big_image');
            $table->string('images');
            $table->integer('price');
            $table->string('spec');
            $table->string('slug');

            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');

            $table->integer('subcategory_id')->unsigned()->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategory')->onDelete('cascade');

            $table->integer('color_id')->unsigned()->nullable();
            $table->foreign('color_id')->references('id')->on('item_colors')->onDelete('cascade');

            $table->integer('size_id')->unsigned()->nullable();
            $table->foreign('size_id')->references('id')->on('item_size')->onDelete('cascade');

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
        Schema::drop('items');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_photos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('photo');
        $table->integer('item_id')->unsigned()->nullable();
        $table->foreign('item_id')->references('id')->on('Items')->onDelete('cascade');
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
        Schema::drop('item_photos');
    }
}

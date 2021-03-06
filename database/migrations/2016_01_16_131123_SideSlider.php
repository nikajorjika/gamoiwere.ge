<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SideSlider extends Migration
{
    public function up()
    {
        Schema::create('sideslider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_geo');
            $table->string('title_eng');
            $table->string('title_rus');
            $table->string('link_title_geo');
            $table->string('link_title_eng');
            $table->string('link_title_rus');
            $table->string('url');
            $table->string('image');
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
        Schema::drop('sideslider');
    }
}

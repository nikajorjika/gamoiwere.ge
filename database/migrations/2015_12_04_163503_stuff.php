<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stuff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name_geo');
            $table->string('full_name_eng');
            $table->string('full_name_rus');
            $table->string('position_geo');
            $table->string('position_eng');
            $table->string('position_rus');
            $table->text('content_geo');
            $table->text('content_eng');
            $table->text('content_rus');
            $table->string('image');
            $table->string('phone');
            $table->string('email');
            $table->string('fb');
            $table->string('tw');
            $table->string('li');
            $table->string('slug');
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
        Schema::drop('staff');
    }
}

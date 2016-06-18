<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlexslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flexsliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',128);
            $table->string('alias',128);
            $table->string('image',128);
            $table->integer('order')->unsigned;
            $table->integer('group_id')->unsigned;
            $table->string('box1')->nullable();
            $table->string('img_box1',128)->nullable();
            $table->string('box2')->nullable();
            $table->string('img_box2',128)->nullable();
            $table->string('box3')->nullable();
            $table->string('img_box3',128)->nullable();
            $table->string('box4')->nullable();
            $table->string('img_box4',128)->nullable();
            $table->string('box5')->nullable();
            $table->string('img_box5',128)->nullable();
            $table->string('published')->nullable();
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
        Schema::drop('flexsliders');
    }
}

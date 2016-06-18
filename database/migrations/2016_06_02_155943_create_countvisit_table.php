<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountvisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countvisit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txtstart',16)->nullable();
            $table->string('txtyesterday',16)->nullable();
            $table->integer('yesterday');
            $table->string('txttoday',16)->nullable();
            $table->integer('today');
            $table->integer('week');
            $table->integer('month');
            $table->integer('year');
            $table->integer('total');
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
        Schema::drop('countvisit');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtmlBlock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('htmlblock', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',128);
            $table->string('alias',128);
            $table->longText('content');
            $table->string('published',16)->nullable();
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
        Schema::drop('htmlblock');
    }
}

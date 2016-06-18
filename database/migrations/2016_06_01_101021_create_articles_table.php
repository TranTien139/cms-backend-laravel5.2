<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('alias');
            $table->string('description');
            $table->longText('content');
            $table->string('image');
            $table->integer('category_id');
            $table->integer('tag_id');
            $table->string('auth')->nullable;
            $table->string('ishot',8)->nullable();
            $table->string('published',16)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('articles');
    }
}

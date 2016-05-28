<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('components', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('component_categories');
          $table->string('description');
          $table->integer('price');
          $table->integer('speed');
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
      Schema::drop('components');
    }
}

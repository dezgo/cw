<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('component_categories', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('long_name');
          $table->string('image_path');
          $table->boolean('required');
          $table->text('description');
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
      Schema::drop('component_categories');
    }
}

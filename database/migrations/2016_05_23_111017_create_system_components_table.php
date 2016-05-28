<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_components', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('system_id')->unsigned();
            $table->foreign('system_id')->references('id')->on('systems');
            $table->integer('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components');
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
        Schema::drop('system_components');
    }
}

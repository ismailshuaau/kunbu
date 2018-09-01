<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('start_time');
            $table->string('price');
            $table->boolean('on_sunday');
            $table->boolean('on_monday');
            $table->boolean('on_tuesday');
            $table->boolean('on_wednesday');
            $table->boolean('on_thursday');
            $table->boolean('on_friday');
            $table->boolean('on_saturday');
            $table->timestamps();

            $table->integer('vessel_id')->unsigned();
            $table->foreign('vessel_id')->references('id')->on('vessels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schedules');
    }
}

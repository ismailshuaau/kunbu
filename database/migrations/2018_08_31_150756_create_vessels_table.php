<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tracking_id');
            $table->string('name');
            $table->text('description');
            $table->string('reg_number');
            $table->integer('capacity_seat');
            $table->integer('capacity_volume');
            $table->integer('capacity_weight');
            $table->string('speed');
            $table->string('image_filename', 512);
            $table->string('image_path', 512);
            $table->boolean('status');


            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->integer('operator_id')->unsigned();
            $table->foreign('operator_id')->references('id')->on('operators');

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
        Schema::drop('vessels');
    }
}

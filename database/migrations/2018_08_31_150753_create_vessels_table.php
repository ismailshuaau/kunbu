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
            $table->string('name');
            $table->text('description');

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

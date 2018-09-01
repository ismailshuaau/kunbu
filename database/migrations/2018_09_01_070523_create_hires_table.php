<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_type');
            $table->string('depurturetime');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->string('email');
            $table->string('island_from');
            $table->string('island_to');
            $table->text('message');
            $table->timestamps();
            $table->boolean('status');
            $table->boolean('isPaid');
 
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
        Schema::drop('hires');
    }
}

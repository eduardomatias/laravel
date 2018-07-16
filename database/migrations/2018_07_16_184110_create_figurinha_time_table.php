<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigurinhaTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figurinha_time', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('figurinha_id')->unsigned();
            $table->foreign('figurinha_id')->references('id')->on('figurinhas');
            $table->integer('time_id');
            $table->foreign('time_id')->references('id')->on('times');
            $table->unique(['figurinha_id', 'time_id']);
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
        Schema::dropIfExists('figurinha_time');
    }
}

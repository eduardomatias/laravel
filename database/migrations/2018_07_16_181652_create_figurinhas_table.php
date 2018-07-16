<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigurinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figurinhas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_jogador');
            $table->string('time_local');
            $table->string('posicao');
            $table->date('nascido_en');
            $table->binary('url_foto')->nullable();
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
        Schema::dropIfExists('figurinhas');
    }
}

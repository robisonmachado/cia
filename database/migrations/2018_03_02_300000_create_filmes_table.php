<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('nome',100);
            $table->integer('duracao')->nullable();
            $table->string('diretor',100)->nullable();

            $table->integer('nacionalidade_id')->unsigned();
            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidades')->onDelete('cascade');

            $table->string('url_capa')->nullable();
            $table->string('url_arquivo');
            $table->string('url_arquivo_encurtada')->nullable();
            $table->integer('ano_lancamento')->nullable();
            $table->text('sinopse')->nullable();

            $table->boolean('ativo')->default(true);

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
        Schema::dropIfExists('filmes');
    }
}

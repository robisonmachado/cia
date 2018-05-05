<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('numero')->unsigned();
            $table->string('nome',100)->nullable();

            $table->integer('temporada_id')->unsigned();
            $table->foreign('temporada_id')->references('id')->on('temporadas')->onDelete('cascade');

            $table->unique(['numero','temporada_id']);

            $table->text('descricao')->nullable();
            $table->string('url_arquivo');
            $table->string('url_capa')->nullable();
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
        Schema::dropIfExists('episodios');
    }
}

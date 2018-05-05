<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_genero', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');


            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filmes')->onDelete('cascade');


            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');

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
        Schema::dropIfExists('filme_genero');
    }
}

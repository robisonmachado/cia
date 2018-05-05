<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('temporadas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->integer('numero')->unsigned();            
            $table->string('nome',100)->nullable();            

            $table->integer('serie_id')->unsigned();
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');

            $table->unique(['numero','serie_id']);

            $table->string('url_capa')->nullable();
            $table->text('descricao')->nullable();
            
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
        Schema::dropIfExists('temporadas');
    }
}

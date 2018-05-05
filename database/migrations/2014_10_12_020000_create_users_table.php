<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('user_type_id')->unsigned()->default(1);
            $table->foreign('user_type_id')->references('id')->on('user_types')->onDelete('cascade');


            $table->integer('pai_id')->unsigned()->default(1);
            $table->foreign('pai_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('ativo')->default(true);

            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->text('observacoes')->nullable();

            $table->string('token_access')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

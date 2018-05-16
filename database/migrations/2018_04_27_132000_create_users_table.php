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
            $table->increments('id');
            $table->string('name');
            $table->string('name_social')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('sexo', ['Masc', 'Fem']);
            $table->date('data_nasc');
            $table->string('telefone');
            $table->string('cpf')->unique();
            $table->integer('convenio_id')->unsigned()->nullable();
            $table->foreign('convenio_id')->references('id')->on('convenios')->onDelete('cascade');
            $table->integer('triagem_id')->unsigned()->nullable();
            $table->foreign('triagem_id')->references('id')->on('triagens')->onDelete('cascade');
            $table->integer('endereco_id')->nullable()->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
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


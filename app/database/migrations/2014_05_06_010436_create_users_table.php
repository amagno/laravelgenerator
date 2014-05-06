<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('username', 128)->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('remember_token');
            $table->string('firstname', 128);
            $table->string('lastname', 256);
            $table->integer('departamento_id')->unsigned();
            $table->integer('acesso_id')->unsigned();
            $table->boolean('enabled');
            $table->timestamps();


        });
        Schema::create('departamentos', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('acessos', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        //Foreign key
        Schema::table('users', function(Blueprint $table){
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('acesso_id')->references('id')->on('acessos');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
        Schema::drop('departamentos');
        Schema::drop('acessos');
	}

}

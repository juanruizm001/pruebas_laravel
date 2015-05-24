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
		Schema::table('users', function($table){

            $table->create();
            //Crea un campo de clave primaria autoincrementable
            $table->increments('id');

            /*Los campos a crear en la BD por defecto:
             *varchar los string con valor de 200, como segundo
             * parametro se puede pasar el tamaño
             */
            $table->string('email');
            $table->string('real_name');
            $table->string('password');

            //Se encarga de crear el campo de creacion y de actualizacion de la tabla (timestamp)
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
		Schema::drop('users');
	}

}

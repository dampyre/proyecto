<?php

use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//tabla de contacto asociado a empresa
		Schema::create('contacto',function($table){
			$table ->increments('id');
			$table ->integer('empresa_id');
			$table ->string('nombre');
			$table ->string('apellido');
			$table ->string('email');
			$table ->string('cargo');
			$table ->string('fono');
			$table ->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('contacto');
	}

}
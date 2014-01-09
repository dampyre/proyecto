<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function($table){
			$table ->increments('id');
			$table ->string('nombre');
			$table ->string('apellido');
			$table ->string('nick');
			$table ->string('email');
			$table ->string('password');
			$table ->string('tipo');
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
		Schema::drop('admin');
	}

}
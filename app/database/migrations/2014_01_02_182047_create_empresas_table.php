<?php

use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//taba empresas

		Schema::create('empresa', function($table){
			$table ->increments('id');
			$table ->string('nombre_empresa');
			$table ->string('n_asociado');
			$table ->string('sucursal');
			$table ->string('comuna_ciudad');
			$table ->string('area_alcance');
			$table ->string('fecha_ingreso');
			$table ->string('password');
			$table ->string('rut');
			$table ->string('email');
			$table ->string('fono');
			$table ->string('direccion');
			$table ->string('habilitado');
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
		Schema::drop('empresa');
	}

}
?>
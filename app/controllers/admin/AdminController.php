<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//return 'aca esta la lista de admins';
		//obtenemos todos los admins desde models 
		$admins= User::all();
		//cargamos la vista y enviamos el resultado de la consulta
		return View:make('admin.dashboard', array('admins'=>$admins));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//return View::make('admin/crearAdmin');
		//return 'formulario para la creacion de admins';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		//return Input::all();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		 return 'Aqui mostramos la info del usuario: ' . $id;
   }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return 'Aqui editamos el usuario: ' . $id;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
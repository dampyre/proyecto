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
		$admins = User::all();
		//cargamos la vista y enviamos el resultado de la consulta
		return View::make('admin.lista', array('admins'=>$admins));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('admin.crear');
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
		$reglas = array(
			'nombre' => 'required',
			'apellido' => 'required',
			'nick' => 'required',
			'email' => 'required|email',
			'password' => 'required',
			'tipo' => 'required'	
			);
		$validar = Validator::make(Input::all(), $reglas);

		$admin = new User;

		$admin->nombre = Input::get('nombre');
		$admin->apellido = Input::get('apellido'); 
		$admin->nick = Input::get('nick');
		$admin->email = Input::get('email');
		$admin->password = Hash::make(Input::get('password'));
		$admin->tipo = Input::get('tipo');
		$admin->save();

		//redireccionamos con un mensaje
		Session::flash('message', 'Administrador fue creado con exito');
		return Redirect::to('dashboard');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//obtenemos el usuario
		$admin = User::find($id);
		//lo pasamos a la vista
		return View::make('admin.ver',array('admin'=>$admin));

		 //return 'Aqui mostramos la info del usuario: ' . $id;
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
		//return 'Aqui editamos el usuario: ' . $id;
		//obtenemos el usuario
		$admin = User::find($id);
		//lo pasamos a la vista
		return View::make('admin.editar',array('admin'=>$admin));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//cramos las reglas
		$reglas = array(
			'nombre' => 'required',
			'apellido' => 'required',
			'nick' => 'required',
			'email' => 'required|email',
			'password' => 'required',
			'tipo' => 'required'	
			);
			$validar = Validator::make(Input::all(), $reglas);

			$admin = User::find($id);

			$admin->nombre = Input::get('nombre');
			$admin->apellido = Input::get('apellido'); 
			$admin->nick = Input::get('nick');
			$admin->email = Input::get('email');
			$admin->password = Hash::make(Input::get('password'));
			$admin->tipo = Input::get('tipo');
			$admin->save();

			Session::flash('message', 'actualizacion realizada');
			return Redirect::to('dashboard');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//eliminar admin el user hace referencia al modelo
		$admin = User::find($id);
		$admin->delete();

		//redireccionar
		Session::flash('menssage', 'Administrador eliminado good bye');
		return Redirect::to('dashboard');
	}

}
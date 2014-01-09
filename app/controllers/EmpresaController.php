<?php

class EmpresaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//mostrar empresas 
		$emp = Empresa::all();
		return View::make('emp.lista', array('emp'=>$emp));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('emp.crearemp');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//se obtienen todos los datos de Input::all();

		$reglas = array(
			'nombre_empresa' => 'required',
			'n_asociado' => 'required',
			'sucursal' => 'required',
			'comuna_ciudad' => '',
			'area_alcance' => 'requiered',
			'fecha_ingreso' => 'required|date',
			'password' => 'required',
			'rut' => 'required',
			'email' => 'required|email',
			'fono' => 'required',
			'direccion' => 'required',
			'habilitado' => 'required'
			);
		$validar = Validator::make(Input::all(),$reglas);
		// crea la empresa  con los datos del formulario
		$empresa = new Empresa;
		$empresa ->nombre_empresa  = Input::get('nombre_empresa'); 
		$empresa ->n_asociado  = Input::get('n_asociado');
		$empresa ->sucursal  = Input::get('sucursal');
		$empresa ->comuna_ciudad  = Input::get('comuna_ciudad');
		$empresa ->area_alcance  = Input::get('area_alcance');
		$empresa ->fecha_ingreso  =  Input::get('fecha_ingreso');
		$empresa ->password  = Hash::make(Input::get('password'));
		$empresa ->rut  = Input::get('rut');
		$empresa ->email  = Input::get('email');
		$empresa ->fono = Input::get('fono');
		$empresa ->direccion = Input::get('direccion');
		$empresa ->habilitado = Input::get('habilitado');
		$empresa ->save();

		//redireccion con mensaje 
		Session::flash('message', 'Empresa creada ..OK !!!');
		return Redirect::to('empresa');


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//mostrar el detalle de empresa 
		$emp = Empresa::find($id);
		return View::make('emp.ver',array('emp'=>$emp));
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
		$emp = Empresa::find($id);
		return View::make('emp.editemp',array('emp'=>$emp));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//se crean las reglas para la edicion 
		
		$reglas = array(
			'nombre_empresa' => 'required',
			'n_asociado' => 'required',
			'sucursal' => 'required',
			'comuna_ciudad' => '',
			'area_alcance' => 'requiered',
			'fecha_ingreso' => 'required|date',
			'password' => 'required',
			'rut' => 'required',
			'email' => 'required|email',
			'fono' => 'required',
			'direccion' => 'required',
			'habilitado' => 'required'
			);
		$validar = Validator::make(Input::all(), $reglas);
		//se busca la empresa por su id 
		 $empresa = Empresa::find($id);

		 // crea la empresa  con los datos del formulario
		
		$empresa ->nombre_empresa  = Input::get('nombre_empresa'); 
		$empresa ->n_asociado  = Input::get('n_asociado');
		$empresa ->sucursal  = Input::get('sucursal');
		$empresa ->comuna_ciudad  = Input::get('comuna_ciudad');
		$empresa ->area_alcance  = Input::get('area_alcance');
		$empresa ->fecha_ingreso  =  Input::get('fecha_ingreso');
		$empresa ->password  = Hash::make(Input::get('password'));
		$empresa ->rut  = Input::get('rut');
		$empresa ->email  = Input::get('email');
		$empresa ->fono = Input::get('fono');
		$empresa ->direccion = Input::get('direccion');
		$empresa ->habilitado = Input::get('habilitado');
		$empresa ->save();

		Session::flash('message', 'actualizacion realizada');
		return Redirect::to('empresa');

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
		$emp = Empresa::find($id);
		$emp->delete();

		//se redirecciona a la base
		Session::flash('message', 'empresa eliminada');
		return Redirect::to('empresa');
	}

}
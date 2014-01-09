<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//pagina principals
Route::get('/', function()
{
	return View::make('landing');
});

//pagina de login
Route::get('/login',['before'=> 'guest', function(){
	return View::make('admin.login');
}] );
//redireccion despues del login de administrador
Route::get('/dashboard',['before'=> 'auth', function(){
	return View::make('admin.dashboard');
}]);
//manejo rutas registro
Route::post('/login', ['uses'=> 'AuthAdmin@adminLogin', 'before'=> 'guest']);
Route::get('/logout', ['uses'=> 'AuthAdmin@adminSalir', 'before' => 'auth']);
//end login



//base de rutas de administrador
Route::resource('admins', 'AdminController');
/*Route::get('/dashboard', function(){
	$admins = User::all();
	return View::make('admin.dashboard', array('admins'=>$admins));
});*/
Route::get('/lista', 'AdminController@index');
//ruta para ir al formulario crear admin
Route::get('/crear', function(){
	return View::make('admin.crear');
});
//ruta para enviar formulario a funcion store
Route::post('/crear', 'AdminController@store');


//ruta para ver el perfil 
Route::get('ver/{id}', array('uses' => 'AdminController@show'));
Route::get('editar/{id}', array('uses'=> 'AdminController@edit'));
Route::put('editar/{id}', array('uses'=> 'AdminController@update'));
Route::delete('dashboard/{id}', array('uses'=> 'AdminController@destroy'));

// ---- rutas gestion de empresas ------

Route::resource('empresa', 'EmpresaController');
//ver empresas 
Route::get('/empresa', 'EmpresaController@index');
//crear empresa
//para ir al formulario crear 
Route::get('/crearemp', function(){
	return View::make('emp.crearemp');
});
Route::post('/crearemp', 'EmpresaController@store');
Route::get('veremp/{id}', array('uses' => 'EmpresaController@show'));
//editar empresa
Route::get('editaremp/{id}', array('uses'=> 'EmpresaController@edit'));
Route::put('editaremp/{id}', array('uses'=> 'EmpresaController@update'));

//eliminar empresa
Route::delete('empresa/{id}', array('uses'=> 'EmpresaController@destroy')); 
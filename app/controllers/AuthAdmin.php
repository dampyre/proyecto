<?php 
	/**
	* 
	*/
	class AuthAdmin extends BaseController
	{
		
		public function adminLogin()
		{
			$nick = Input::get('nick');
			$password = Input::get('password');

			//autenticamos
			if(Auth::attempt(['nick'=>$nick, 'password'=>$password])){

				//enviamos al dashboard
				return Redirect::to('/dashboard');

			}
			// La autenticación ha fallado re-direccionamos
        // a la página anterior con los datos enviados
        // y con un mensaje de error
        return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
		}


		public function adminSalir(){

			Auth::logout();
			return Redirect::to('/');
		}
	}
 ?>
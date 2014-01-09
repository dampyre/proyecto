

<?php 
use Carbon\Carbon;
	// app/models/Empresa.php
	class Empresa extends Eloquent
	{
		protected $table = 'empresa';

		public function empresa(){
			return $this->hasMany('Contacto');
		}
	}
 ?>
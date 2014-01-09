<?php 
/**
* 
*/
class AdminTableSeeder extends Seeder
{
	
	public function run()
	{
		$admins = [
			['nombre' => 'arnoldo', 'apellido'=>'zepeda','nick' => 'nono','email'=>'nonozepeda@gmail.com', 'password'=> Hash::make('1234'), 'tipo'=>'admin'],
			['nombre' => 'yahir', 'apellido'=>'castro','nick' => 'dampyre','email'=>'dampyre@gmail.com', 'password'=> Hash::make('s0lang3'), 'tipo'=>'admin']
		];
		DB::table('admin')->insert($admins);
	}
}
 ?>
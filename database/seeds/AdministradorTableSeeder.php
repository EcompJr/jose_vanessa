<?php

use Illuminate\Database\Seeder;
use App\Administrador;

class AdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Administrador::create([
	        'email' => 'administrador1@gmail.com' ,
	        'senha' => bcrypt('12345678'),
        ]);
        

        //
    }
}

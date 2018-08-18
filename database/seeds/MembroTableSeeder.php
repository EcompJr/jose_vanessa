<?php

use Illuminate\Database\Seeder;
use App\Membro;

class MembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::create([
	        'nome' => 'Mary Diva' ,
            'cargo' => 'Diretor',
            'idDepartamento' => '1' ,
        ]);

        Membro::create([
	        'nome' => 'Mary Diva' ,
            'cargo' => 'Coordenador',
            'idDepartamento' => '2' ,
        ]);
        //
    }
}

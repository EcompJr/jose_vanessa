<?php

use Illuminate\Database\Seeder;
use App\Evento;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
	        'nome' => 'Evento Beneficente 1',
	        'data' => '2018/09/15',
	        'hora' => '18:00:00',
	        'local' => 'Apae'
        ]);
        
        Evento::create([
	        'nome' => 'Evento Beneficente 2',
	        'data' => '2018/10/20',
	        'hora' => '17:00:00',
	        'local' => 'Apae'
        ]);
        
        Evento::create([
	        'nome' => 'Evento Beneficente 3',
	        'data' => '2018/11/05',
	        'hora' => '15:00:00',
	        'local' => 'Apae'
	    ]);
        //
    }
}

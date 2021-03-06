<?php

use Illuminate\Database\Seeder;
use acclinic\Triagen;

class TriagenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Triagen::create([
            'altura' => '1.76',
            'peso' => '86.0',
            'obs' => 'Sem observação',
        ]);
       Triagen::create([
            'altura' => '2,10',
            'peso' => '110,0',
            'obs' => 'Alergia ao Medicamento Dipirona',
        ]);
       Triagen::create([
            'altura' => '1.80',
            'peso' => '80.0',
            'obs' => 'Sem Observação',
        ]);
    }
}

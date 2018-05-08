<?php

use Illuminate\Database\Seeder;
use acclinic\Clinica;

class ClinicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clinica::create([
            'tipo_clinic' => 'Matriz',
            'nome' => 'Laboratório de Analises Clínicas - Hemodiagnostico.',
            'contato' => '(96) 3217-0700 / 98801-3805',
            'endereco_id' => 2,
        ]);
        Clinica::create([
            'tipo_clinic' => 'Filial',
            'nome' => 'Laboratório de Analises Clínicas - Hemodiagnostico/São Larazo ',
            'contato' => '(96) 3117 - 0704',
            'endereco_id' => 5,
        ]);
        Clinica::create([
            'tipo_clinic' => 'Filial',
            'nome' => 'Laboratório de Analises Clínicas - Hemodiagnostico/Zerão',
            'contato' => '(96) 98139 - 0044',
            'endereco_id' => 6,
        ]);
        Clinica::create([
            'tipo_clinic' => 'Filial',
            'nome' => 'Laboratório de Analises Clínicas - Hemodiagnostico/Pérpetuo Socorro',
            'contato' => '(96) 3222 - 6120',
            'endereco_id' => 7,
        ]);
        Clinica::create([
            'tipo_clinic' => 'Filial',
            'nome' => 'Laboratório de Analises Clínicas - Hemodiagnostico/Marabaixo',
            'contato' => '(96) 3217-0700 / 98801-3805',
            'endereco_id' => 8,
        ]);
    }
}

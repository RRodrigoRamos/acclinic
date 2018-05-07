<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('admins')->insert([
            'name' => 'Rodrigo Adm',
            'email' => 'rodrigoA1@gmail.com',
            'password' => Hash::make('123456'),

        ]);

        DB::table('admins')->insert([
        	'name' => 'Rodrigo Adm2',
        	'email' => 'rodrigoA2@gmail.com',
        	'password' => Hash::make('123456'),

        ]);

        DB::table('users')->insert([
            'name' => 'Usuario Comum',
            'email' => 'rodrigo2@gmail.com',
            'password' => Hash::make('123456'),

        ]);

        DB::table('users')->insert([
            'name' => 'Usuario Comum',
            'email' => 'rodrigo1@gmail.com',
            'password' => Hash::make('123456'),

        ]);

        DB::table('enderecos')->insert([
            'tipo_local'=> 'Apartamento Palmares',
            'cep'=> '68.909.912',
            'logradouro'=> 'Rua.: Antonio Alveres Correa',
            'numero'=>2110,
            'complement'=>'Próximo ao Posto Combustivel',
            'bairro'=>'Marco Zero',
            'estado'=>'Macapá',
            'cidade'=>'Amapá',
        ]);

        DB::table('enderecos')->insert([
            'tipo_local'=> 'Predio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Av. Coaracy Nunes',
            'numero'=>892,
            'complement'=>'Próximo a Faculdade IMMES',
            'bairro'=>'Centro',
            'estado'=>'Macapá',
            'cidade'=>'Amapá',
        ]);

        DB::table('especialidades')->insert([
            'campo'=>'Acupuntura',
            'descricao'=>'Acupuntura é um conjunto de práticas terapêuticas inspirado nas tradições médicas orientais. Consiste na estimulação de locais anatómicos sobre ou na pele – os chamados pontos de acupuntura.',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Cardiologia',
            'descricao'=>'Cardiologia. é uma especialidade médica que se ocupa do diagnóstico e tratamento de doenças que ocorrem com o coração e o sistema circulatório.',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Clínica Geral',
            'descricao'=>'Clínica Médica. É a especialidade médica que trata de pacientes adultos, atuando principalmente em ambiente hospitalar. Inclui o estudo das doenças de adultos, não cirúrgicas, não obstétricas e não ginecológicas, sendo a especialidade médica a partir da qual se diferenciaram todas as outras áreas clínicas.',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Dermatologia',
            'descricao'=>'Dermatologia é a especialidade médica que se ocupa do diagnóstico e tratamento clínico e cirúrgico das doenças da pele, bem como dos seus anexos (cabelos, unhas e mucosas).',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Endocrinologia',
            'descricao'=>'A Endocrinologia é a especialidade médica que estuda o funcionamento das hormonas no organismo humano e faz o diagnóstico e tratamento das doenças das glândulas de secreção interna (glândulas endócrinas).',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Enfermagem',
            'descricao'=>'Serviços de enfermagem na clínica: Análises ao sangue, Análises à urina, Rastreio da hipertensão arterial, Rastreio da diabetes, Rastreio do colesterol e triglicerídios, Electrocardiograma, Administração de injecções (Medicamentos, vacinas),Realização de tratamento de Feridas, Remoção de pontos/agrafos,  Monitorização de Peso, IMC, Perímetro Abdominal e Peso do Bebé, Ensinos à família/Cuidador Informal de doentes dependentes, Gestão de Medicação, Cuidados de enfermagem ao domicilio.',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Ortodontia',
            'descricao'=>'Serviços de enfermagem na clínica: Análises ao sangue, Análises à urina, Rastreio da hipertensão arterial, Rastreio da diabetes, Rastreio do colesterol e triglicerídios, Electrocardiograma, Administração de injecções (Medicamentos, vacinas),Realização de tratamento de Feridas, Remoção de pontos/agrafos,  Monitorização de Peso, IMC, Perímetro Abdominal e Peso do Bebé, Ensinos à família/Cuidador Informal de doentes dependentes, Gestão de Medicação, Cuidados de enfermagem ao domicilio.',
        ]);
        DB::table('especialidades')->insert([
            'campo'=>'Ortodontia',
            'descricao'=>'Serviços de enfermagem na clínica: Análises ao sangue, Análises à urina, Rastreio da hipertensão arterial, Rastreio da diabetes, Rastreio do colesterol e triglicerídios, Electrocardiograma, Administração de injecções (Medicamentos, vacinas),Realização de tratamento de Feridas, Remoção de pontos/agrafos,  Monitorização de Peso, IMC, Perímetro Abdominal e Peso do Bebé, Ensinos à família/Cuidador Informal de doentes dependentes, Gestão de Medicação, Cuidados de enfermagem ao domicilio.',
        ]);
    }
}
Enfermagem
Ortodontia
Ginecologia|Obstetrícia
Medicina Dentária
Ortopedia
Otorrinolaringologia
Pediatria
Podologia
Psiquiatria
Psicologia
Reumatologia
Urologia
Acupuntura
<?php

use Illuminate\Database\Seeder;
use acclinic\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 User::create([
            'foto' => '../public/images/perfil/homen_adulto.png',
            'name' => 'Paciente 1',
            'name_social' => 'Paciente 1',
            'email' => 'paciente1@gmail.com',
            'password' => bcrypt('123456'),
            'sexo' => 'Masc',
            'data_nasc' => '1990-03-12',
            'telefone' => '96-99102-9214',
            'rg' => '327629-AP',
            'cpf' => '854.319.742-20',
            'profissao' => 'Autonomo',
            'convenio_id' => 3,
            'triagem_id' => 1,
            'endereco_id' => 1,
        ]);
         User::create([
            'foto' => '../public/images/perfil/homem_jovem.jpg',
            'name' => 'Paciente 2',
            'name_social' => 'Paciente 2',
            'email' => 'paciente2@gmail.com',
            'password' => bcrypt('123456'),
            'sexo' => 'Masc',
            'data_nasc' => '1978-06-20',
            'telefone' => '96-99102-9214',
            'rg' => '326619-AP',
            'cpf' => '811.319.002-20',
            'profissao' => 'Professor',
            'convenio_id' => 3,
            'triagem_id' => 1,
            'endereco_id' => 3,
        ]);
         User::create([
            'foto' => '../public/images/perfil/mulher_adulta.png',
            'name' => 'Paciente 3',
            'name_social' => 'Paciente 3',
            'email' => 'paciente3@gmail.com',
            'password' => bcrypt('123456'),
            'sexo' => 'Fem',
            'data_nasc' => '1980-03-10',
            'telefone' => '96-99102-9214',
            'rg' => '320029-PA',
            'cpf' => '800.349.744-20',
            'profissao' => 'Dentista',
            'convenio_id' => 1,
            'triagem_id' => 2,
            'endereco_id' => 1,
        ]);
         User::create([
            'foto' => '../public/images/perfil/mulher_crianca.png',
            'name' => 'Paciente 4',
            'name_social' => 'Paciente 4',
            'email' => 'paciente4@gmail.com',
            'password' => bcrypt('123456'),
            'sexo' => 'Fem',
            'data_nasc' => '2000-02-19',
            'telefone' => '96-99102-9214',
            'rg' => '120011-PA',
            'cpf' => '801.319.144-21',
            'profissao' => 'Dentista',
            'convenio_id' => 2,
            'triagem_id' => 3,
            'endereco_id' => 1,
        ]);  
    }
}

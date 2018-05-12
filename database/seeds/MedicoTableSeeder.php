<?php

use Illuminate\Database\Seeder;
use acclinic\Medico;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Alfredo Costa',
            'crm' =>'12341-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico1@gmail.com',
            'especialidade_id' =>1,
            'endereco_id' =>1,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Alice Costa',
            'crm' =>'12001-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico2@gmail.com',
            'especialidade_id' =>2,
            'endereco_id' =>2,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Brasil',
            'crm' =>'12012-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico3@gmail.com',
            'especialidade_id' =>3,
            'endereco_id' =>3,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Brasil1',
            'crm' =>'12013-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico31@gmail.com',
            'especialidade_id' =>3,
            'endereco_id' =>3,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Henrique Ramos',
            'crm' =>'18716-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico4@gmail.com',
            'especialidade_id' =>4,
            'endereco_id' =>4,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Fransico Alveres',
            'crm' =>'17861-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico5@gmail.com',
            'especialidade_id' =>5,
            'endereco_id' =>5,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Pedro Alveres',
            'crm' =>'17877-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico6@gmail.com',
            'especialidade_id' =>6,
            'endereco_id' =>6,
        ]); 
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Pedro Alveres2',
            'crm' =>'178771-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico62@gmail.com',
            'especialidade_id' =>6,
            'endereco_id' =>6,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Pedro Alveres1',
            'crm' =>'178971-AP', 
            'sexo' =>'Masc',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico61@gmail.com',
            'especialidade_id' =>6,
            'endereco_id' =>6,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Maria Brasil',
            'crm' =>'10007-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico7@gmail.com',
            'especialidade_id' =>7,
            'endereco_id' =>7,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Maria Brasil1',
            'crm' =>'100071-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico8@gmail.com',
            'especialidade_id' =>7,
            'endereco_id' =>7,
        ]);
      Medico::create([
            'foto' =>'../public/images/perfil/homem_jovem.jpg',
            'name' =>'Dr. Maria Brasil2',
            'crm' =>'100072-AP', 
            'sexo' =>'Fem',
            'data_nasc' =>'1990-03-12',
            'telefone' =>'96-99100-0001',
            'email' =>'medico9@gmail.com',
            'especialidade_id' =>7,
            'endereco_id' =>7,
        ]);
     
    }
}

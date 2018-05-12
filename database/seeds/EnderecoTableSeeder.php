<?php

use Illuminate\Database\Seeder;
use acclinic\Endereco;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 // Criando endereço para busca de registro
        Endereco::create ([
            'tipo_local'=> 'Apartamento',
            'cep'=> '68.909.912',
            'logradouro'=> 'Rua.: Antonio Alveres Correa',
            'numero'=>2110,
            'complement'=>'Próximo ao Posto Combustivel',
            'bairro_id'=>1,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Av. Coaracy Nunes',
            'numero'=>892,
            'complement'=>'Próximo a Faculdade IMMES',
            'bairro_id'=>9,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.908-110',
            'logradouro'=> 'Av. FAB',
            'numero'=>811,
            'complement'=>'Próximo ao SuperMercado Fortaleza',
             'bairro_id'=>2,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.907-910',
            'logradouro'=> 'Av. Palmares',
            'numero'=>811,
            'complement'=>'Próximo ao SuperMercado Fortaleza',
             'bairro_id'=>5,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Rua Adilson José Pinto Pereira',
            'numero'=>1209,
            'complement'=>'', 
            'bairro_id'=>6,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Rua Dom José Maritano',
            'numero'=>1184,
            'complement'=>'',
             'bairro_id'=>2,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Rua Rio Xingu',
            'numero'=>000,
            'complement'=>'', 
            'bairro_id'=>2,
        ]);
        Endereco::create ([
            'tipo_local'=> 'Prédio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Sem endereço',
            'numero'=>000,
            'complement'=>'', 
            'bairro_id'=>9,
        ]);

    }
}

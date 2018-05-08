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
            'tipo_local'=> 'Apartamento Palmares',
            'cep'=> '68.909.912',
            'logradouro'=> 'Rua.: Antonio Alveres Correa',
            'numero'=>2110,
            'complement'=>'Próximo ao Posto Combustivel',
            'bairro'=>'Marco Zero',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Av. Coaracy Nunes',
            'numero'=>892,
            'complement'=>'Próximo a Faculdade IMMES',
            'bairro'=>'Centro',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.908-110',
            'logradouro'=> 'Av. FAB',
            'numero'=>811,
            'complement'=>'Próximo ao SuperMercado Fortaleza',
            'bairro'=>'Centro',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.907-910',
            'logradouro'=> 'Av. Palmares',
            'numero'=>811,
            'complement'=>'Próximo ao SuperMercado Fortaleza',
            'bairro'=>'Centro',
            'estado'=>'Amapá',
            'cidade'=>'Santana',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Rua Adilson José Pinto Pereira',
            'numero'=>1209,
            'complement'=>'',
            'bairro'=>'São Lázaro',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Rua Dom José Maritano',
            'numero'=>1184,
            'complement'=>'',
            'bairro'=>'Zerão',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Rua Rio Xingu',
            'numero'=>000,
            'complement'=>'',
            'bairro'=>'Pérpetuo Socorro',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);
        Endereco::create ([
            'tipo_local'=> 'Predio',
            'cep'=> '68.900-010',
            'logradouro'=> 'Sem endereço',
            'numero'=>000,
            'complement'=>'',
            'bairro'=>'Marabaixo',
            'estado'=>'Amapá',
            'cidade'=>'Macapá',
        ]);

    }
}

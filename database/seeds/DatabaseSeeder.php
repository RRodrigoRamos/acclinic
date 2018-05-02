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
    }
}

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
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(ClinicaTableSeeder::class);
        $this->call(ConvenioTableSeeder::class);
        $this->call(EspecialidadeTableSeeder::class);
        $this->call(MedicoTableSeeder::class);
        $this->call(statusAgendaTableSeeder::class);
        $this->call(TriagenTableSeeder::class);
        $this->call(AgendamentoTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(BairroTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(ClinicaMedicoTableSeeder::class);
    }
}
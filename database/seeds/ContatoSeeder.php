<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert([
            'nome' => 'José da Silva',
            'endereco' => 'Rua José Oliveira, Nº 01, Centro, Lumpa Lumpa',
            'email' => 'js@email.com',
            'telefone' => '(54) 9 8523 - 3645'
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Maria Oliveira',
            'endereco' => 'Rua Pedro Carlos, Nº 65, Norte, Lumpa Lumpa',
            'email' => 'mariao@email.com',
            'telefone' => '(54) 9 1563 - 0645'
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Fernando Jacomé',
            'endereco' => 'Rua Plácido Romano, Nº 981, Sul, Roseiro do Norte',
            'email' => 'jacome@email.com',
            'telefone' => '(63) 9 4511 - 0022'
        ]);
    }
}

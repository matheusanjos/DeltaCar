<?php

use Illuminate\Database\Seeder;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'nome' => 'Grupo A',
            'descricao' => '2 portas, econômico, ar-condicionado',
        ]);

        DB::table('grupos')->insert([
            'nome' => 'Grupo H',
            'descricao' => 'SUV, 4 portas, grande espaço',
        ]);
    }
}

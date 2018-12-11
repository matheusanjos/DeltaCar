<?php

use Illuminate\Database\Seeder;

class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carros')->insert([
            'modelo' => 'Argo',
            'marca' => 'Fiat',
            'quantidade' => '10',
            'grupo_id' => 1,
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Renegade',
            'marca' => 'Jeep',
            'quantidade' => '5',
            'grupo_id' => 2,
        ]);

        DB::table('carros')->insert([
            'modelo' => 'Kicks',
            'marca' => 'Nissan',
            'quantidade' => '5',
            'grupo_id' => 2,
        ]);
    }
}

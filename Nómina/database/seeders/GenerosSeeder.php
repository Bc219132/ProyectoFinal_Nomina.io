<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'id' => '1',
            'Tipo_Genero' => 'Masculino',
        ]);

        DB::table('generos')->insert([
            'id' => '2',
            'Tipo_Genero' => 'Femenino',
        ]);
    }
}

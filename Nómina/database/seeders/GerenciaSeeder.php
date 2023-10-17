<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GerenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gerencias')->insert([
            'id' => '1',
            'TipoGerencia' => 'Gerencia Adminitrativa',
        ]);

        DB::table('gerencias')->insert([
            'id' => '2',
            'TipoGerencia' => 'Gerencia de Operaciones',
        ]);
    }
}

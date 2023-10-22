<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallesCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalles_cargos')->insert([
            'id' => '1',
            'TipoCargo' => 'Analista 1',
            'Sueldo' => '20',
            'id_cestatikect' => '1',
            'id_gerencia' => '1',
            'id_dolar' => '1',
        ]);
    }
}

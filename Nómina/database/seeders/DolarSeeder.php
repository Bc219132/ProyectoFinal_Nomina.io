<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DolarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dolars')->insert([
            'id' => '1',
            'TasaActual' => '40.24',
            'FechaActual' => '01/10/2023',
        ]);
    }
}

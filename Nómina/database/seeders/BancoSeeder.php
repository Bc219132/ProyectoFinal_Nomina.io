<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bancos')->insert([
            'id' => '0102',
            'NombreBanco' => 'Banco de Venezuela',
        ]);

        DB::table('bancos')->insert([
            'id' => '0105',
            'NombreBanco' => 'Mercantil',
        ]);

        DB::table('bancos')->insert([
            'id' => '0114',
            'NombreBanco' => 'Bancaribe',
        ]);
    }
}

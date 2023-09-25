<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Roles')->insert([
            'id' => '1',
            'Tipo_Rol' => 'Administrador',
        ]);

        DB::table('Roles')->insert([
            'id' => '2',
            'Tipo_Rol' => 'Consultor',
        ]);

        DB::table('Roles')->insert([
            'id' => '3',
            'Tipo_Rol' => 'Ejecutor',
        ]);
    }
}

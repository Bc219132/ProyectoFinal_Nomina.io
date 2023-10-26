<?php

namespace Database\Seeders;

use App\Models\DatosLaborales;
use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Roles
        $this->call(RolesSeeder::class);

        //Genero
        $this->call(GenerosSeeder::class);

        //Banco
        $this->call(BancoSeeder::class);

        //dolar
        $this->call(DolarSeeder::class);

        //Gerencia
        $this->call(GerenciaSeeder::class);

        //Cestatikect
        $this->call(CestatikectSeeder::class);

        //Cargo
        $this->call(DetallesCargosSeeder::class);

        //usuario Maestro
        User::insert([
            [
                'Nombre_Usuario' => 'AdminSecurity',
                'email' => 'adminsecurity@gmail.com',
                'password' => Hash::make('1234/#*'),
                'id_roles' => 1
            ],
            [
                'Nombre_Usuario' => 'wizard',
                'email' => 'jonathanalvarado1407@gmail.com',
                'password' => Hash::make('password'),
                'id_roles' => 1
            ]
        ]);

        DatosLaborales::factory()->count(10)->create();
    }
}

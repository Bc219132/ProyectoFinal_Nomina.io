<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


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

        //usuario Maestro
        $user = new User;
        $user->Nombre_Usuario = 'AdminSecurity';
        $user->password = ('1234/#*');
        $user->id_roles = '1';

        $user-> save();

    }
}

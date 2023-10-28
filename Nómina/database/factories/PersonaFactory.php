<?php

namespace Database\Factories;

use App\Models\Generos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return  [
            'PrimerNombre' => fake()->name(),
            'PrimerApellido' => fake()->lastName(),
            'Cedula' => fake()->randomNumber(7, true),
            'RIF' => fake()->randomNumber(7, true),
            'FechaNacimiento' => fake()->date(),
            'TipoDocumento' => 'V',
            'id_generos' => Generos::inRandomOrder()->first(),
        ];
    }
}

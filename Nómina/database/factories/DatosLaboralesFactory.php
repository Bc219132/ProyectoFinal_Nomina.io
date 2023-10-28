<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DatosLaborales>
 */
class DatosLaboralesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $accountNumber = '';

        for ($i = 0; $i < 20; ++$i) {
            $accountNumber .= fake()->randomDigit();
        }

        return [
            'TipoContrato' => 'Fijo',
            'id_banco' => 102,
            'NCuentaBancaria' => $accountNumber,
            'TipoCuenta' => 'Corriente',
            'FechaIngreso' => fake()->date(),
            'NivelAcademico' => 'Superior',
            'id_personas' => function () {
                return Persona::factory()->create()->id;
            },
            'id_detalles_cargos' => 1,
        ];
    }
}

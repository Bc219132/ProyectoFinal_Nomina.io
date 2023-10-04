<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosLaborales extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'TipoContrato',
        'id_banco',
        'NCuentaBancaria',
        'TipoCuenta',
        'FechaIngreso',
        'NivelAcademico',
        'id_cargo',
        'id_gerencia',
        'id_personas',
        ];
}

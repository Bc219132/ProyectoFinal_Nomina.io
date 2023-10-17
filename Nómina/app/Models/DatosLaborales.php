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
        'FechaEgreso',
        'Estatus',
        'id_cargo',
        'id_gerencia',
        'id_personas',
    ];

    public function person()
    {
        return $this->belongsTo(Persona::class, 'id_personas');
    }
}

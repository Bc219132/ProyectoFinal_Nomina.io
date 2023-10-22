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
        'id_detalles_cargos',
        'id_personas',
    ];

    public function person()
    {
        return $this->belongsTo(Persona::class, 'id_personas');
    }

    public function detallesCargos()
    {
        return $this->belongsTo(DetallesCargos::class, 'id_detalles_cargos');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo_ads extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'Año',
        'Mes',
        'Periodo',
        'SueldoMen_Bs',
        'TotalAbonar',
        'DiasTrabajados',
        'Vacaciones',
        'CestaTickes',
        'Utilidades',
        'TotalA',
        'Ausencias',
        'Sso',
        'Rpe',
        'Faov',
        'TotalD',
        'id_datos_laborales',
        'id_historico_pagos',
    ];

    public function datosLaborales()
    {
        return $this->belongsTo(DatosLaborales::class, 'id_datos_laborales');
    }
}

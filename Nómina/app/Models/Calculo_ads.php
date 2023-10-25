<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo_ads extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'Año',
        'Mes',
        'Periodo',
        'id_datos_laborales',
        'id_asignaciones',
        'id_deducciones',
    ];

    public function datosLaborales()
    {
        return $this->belongsTo(DatosLaborales::class, 'id_datos_laborales');
    }
}

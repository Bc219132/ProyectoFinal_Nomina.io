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
        'Momento',
        'id_datos_laborales',
        'id_asignaciones',
        'id_deducciones',
    ];

}

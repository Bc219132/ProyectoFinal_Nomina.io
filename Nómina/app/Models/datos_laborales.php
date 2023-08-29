<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_laborales extends Model
{
    use HasFactory;

    protected $fillable = [

        //'IDDatos_Laborales',
        'Tipo_Contrato',
        'Fecha_Ingreso',
        'Nivel_Academico'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_bancarios extends Model
{
    use HasFactory;


    protected $fillable = [

        //'IDDato_Bancarios',
        'Nombre_Banco',
        'Cuenta_Bancaria',
        'Tipo_Cuenta'
    ];

}

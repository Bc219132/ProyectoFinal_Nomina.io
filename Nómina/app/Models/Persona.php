<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'PrimerNombre',
        'SegundoNombre',
        'PrimerApellido',
        'SegundoApellido',
        'Cedula',
        'RIF',
        'FechaNacimiento',
        'Nacionalidad',
        'id_generos',
        ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesCargos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'TipoCargo',
        'Sueldo',
        'id_cestatikect',
        'id_gerencia',
        ];

    public function gerencia()
    {
        return $this->belongsTo(Gerencia::class, 'id_gerencia');
    }

    
}

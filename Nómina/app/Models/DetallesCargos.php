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
        'id_cestatikects',
        'id_gerencia',
        'id_dolars',
        ];

    public function gerencia()
    {
        return $this->belongsTo(Gerencia::class, 'id_gerencia');
    }

    public function dolars()
    {
        return $this->belongsTo(Dolar::class, 'id_dolars');
    }

    public function cestaTickes()
    {
        return $this->belongsTo(Cestatikect::class, 'id_cestatikects');
    }

    
}

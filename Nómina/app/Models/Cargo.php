<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'TipoCargo',
        'Sueldo',
        'id_gerencia',
        'id_cestatikects',
        'id_dolars',

        ];

        public function cestatikect()
        {
            return $this->belongsTo(Cestatikect::class, 'id_cestatikects');
        }

        public function gerencia()
        {
            return $this->belongsTo(Gerencia::class, 'id_gerencia');
        }
}

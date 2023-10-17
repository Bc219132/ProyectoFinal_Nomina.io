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
        'id_sueldo',
        ];

        public function Sueldo(){

            return $this->hasOne(Sueldo::class, 'id','id_sueldo');

        }
}

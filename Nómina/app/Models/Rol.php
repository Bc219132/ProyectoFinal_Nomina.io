<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

        protected $fillable = [
        'id',
        'Tipo_Rol',
        ];

        public function users(){
            return $this->hasMany(User::class, 'id');
        }
}

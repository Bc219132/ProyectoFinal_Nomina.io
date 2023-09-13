<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;

class RegistroController extends Controller
{
    public function create(){

        return view('Registro');
    }

    public function store () {

        $this->validate(request(), [
            'Nombre_Usuario' => 'required', 
            'password' => 'required', 
            'id_roles' => 'required',
        ]);

        $user = user::create(request(['Nombre_Usuario', 'password', 'id_roles']));

        auth()->Login($user);
    }
}

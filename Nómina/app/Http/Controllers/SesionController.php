<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SesionController extends Controller
{
    public function create() {

        return view('Login');
    }

    public function store() {

        if(auth()->attempt(request(['Nombre_Usuario', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Usuario o Correo invalido, por favor volver a intentarsss',
            ]);
        }
        return redirect()->to('Registro');
    }

    public function destroy(){

        auth()->logout();

        return redirect()->to('/');
    }
}


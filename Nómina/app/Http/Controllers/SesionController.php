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

        } if(auth()->user()->id_roles == '1'){
            return redirect()->route('Admin.index'); 
        }if(auth()->user()->id_roles == '2'){
            return redirect()->route('Ejec.index'); 
        } else {
            if(auth()->user()->id_roles == '3'){
                return redirect()->route('Consul.index'); 
            }
        }
    }

    public function destroy(){

        auth()->logout();

        return redirect()->to('/');
    }
}


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
        if (auth()->attempt(request(['Nombre_Usuario', 'password'])) == false) {
            return back()
                ->withErrors([
                    'message' => 'Usuario o contraseña incorrectos, por favor volver a intentar',
                ]);
        }
    
        // Agregar una redirección después de iniciar sesión
        if (auth()->user()->id_roles == '1') {
            return redirect()->route('Admin.index');
        } elseif (auth()->user()->id_roles == '3') {
            return redirect()->route('Ejec.index');
        } elseif (auth()->user()->id_roles == '2') {
            return redirect()->route('Consul.index');
        } else {
            // 
            return redirect()->route('/Login');
        }
    }

    public function destroy(){

        auth()->logout();

        $response = response()->redirectTo('/'); // Redirige a la página inicio
        $response->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);

    return $response;

    }
}


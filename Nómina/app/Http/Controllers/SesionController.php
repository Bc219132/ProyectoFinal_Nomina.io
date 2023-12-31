<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SesionController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = ['email' => $request->input('correo'), 'password' => $request->input('contraseña')];
        if (!auth()->attempt($credentials, $request->boolean('remember-me')) && !auth()->viaRemember()) {
            return back()->withErrors([
                'message' => 'Correo o contraseña incorrectos.',
            ]);
        }
        if (auth()->user()->id_roles == '1') {
            return redirect()->route('Admin.index');
        } else if (auth()->user()->id_roles == '3') {
            return redirect()->route('Ejec.index');
        } else if (auth()->user()->id_roles == '2') {
            return redirect()->route('Consul.index');
        }

        return redirect()->route('login.index');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('login.index');
    }
}

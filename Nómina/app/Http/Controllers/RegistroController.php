<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

class RegistroController extends Controller
{
    public function index()
    {
        $datos['users'] = User::paginate(5);
        return view('persona/user.index', $datos);
    }

    public function create()
    {
        if(auth()->check() && (auth()->user()->id_roles == '1' || auth()->user()->id_roles == '2')) {
            $roles = Roles::all();
            return view('Registro', compact('roles'));
        }else{
            $roles = null;
        }
        
    }

    public function store()
    {
        $messages = [
            'password.regex' => 'La contraseña debe contener al menos un carácter especial como !@#$%^&*()\-_=+{};:,<.>',
        ];

        $this->validate(request(), [
            'Nombre_Usuario' => 'required',
            'password' => [
                'required',
                'regex:/^(?=.*[!@#$%^&*()\-_=+{};:,<.>])/', // Al menos un carácter especial permitido
                'min:8', // Mínimo 8 caracteres
            ],
            'id_roles' => 'required',
            'email' => 'required|email|unique:users,email'
        ], $messages);

        $user = User::create(request(['Nombre_Usuario', 'password', 'id_roles', 'email']));

        return redirect('user')->with('mensaje', 'Usuario Creado Exitosamente');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('mensaje', 'Usuario Eliminado exitosamente');
    }
}

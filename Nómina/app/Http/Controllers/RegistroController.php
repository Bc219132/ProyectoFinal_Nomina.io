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
        //$datosuser = request()->except('_token','password_Confirmation');
        //User::insert($datosuser);
        //return redirect('persona/user')->with('mensaje','Usuario Agregado exitosamente');
        $this->validate(request(), [
            'Nombre_Usuario' => 'required',
            'password' => 'required',
            'id_roles' => 'required',
        ]);

        $user = user::create(request(['Nombre_Usuario', 'password', 'id_roles']));

        
        return redirect('user')->with('mensaje', 'Usuario Creado Exitosamente');
    }
}

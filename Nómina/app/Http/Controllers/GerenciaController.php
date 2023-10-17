<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerencia;

class GerenciaController extends Controller
{
    public function index(){
        $datos['gerencias'] = Gerencia::paginate(15);
        return view('persona.gerencia.index', $datos);
    }

    public function create(){
       //
       return view('persona.gerencia.create');
    }



    public function store(Request $request)
    {
        //
        $datosGerencia = request()->except('_token');
        Gerencia::insert($datosGerencia);
        return redirect('gerencia')->with('mensaje', 'Guardado exitosamente');
    }

    public function edit($id)
    {
       //
    }

    public function update(Request $request, $id)
    {
       //
    }

    public function destroy($id)
    {
        //
        Gerencia::destroy($id);
        return redirect('gerencia');
    }
}

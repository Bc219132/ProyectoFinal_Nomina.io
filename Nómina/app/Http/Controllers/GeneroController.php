<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GeneroController extends Controller
{
    public function index(){
        $datos['generos'] = Generos::paginate(15);
        return view('persona.genero.index', $datos);
    }

    public function create(){
       //
       return view('persona.genero.create');
    }



    public function store(Request $request)
    {
        //
        $datosGenero = request()->except('_token');
        Generos::insert($datosGenero);
        return redirect('genero')->with('mensaje', 'Guardado exitosamente');
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
        Generos::destroy($id);
        return redirect('genero');
    }
}

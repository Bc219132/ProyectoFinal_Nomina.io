<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesCargos;
use App\Models\Sueldo;
use App\Models\Gerencia;
use App\Models\Generos;

class DetallesCargosController extends Controller
{
    public function index(){
        $datos['cargos'] = Detallescargos::paginate(15);
        return view('persona.cargo.index', $datos);
    }

    public function create(){
       //
       return view('persona.cargo.create');
    }



    public function store(Request $request)
    {
        //
        $datosCargo = request()->except('_token');
        Detallescargos::insert($datosCargo);
        $generos = Generos::all();
        return redirect('cargo')->with('mensaje', 'Guardado exitosamente');
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
        Detallescargos::destroy($id);
        return redirect('cargo');
    }
}
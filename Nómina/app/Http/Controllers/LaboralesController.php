<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Generos;
use App\Models\DatosLaborales;
use App\Models\Gerencia;
use App\Models\Banco;
use App\Models\Cargo;
use App\Models\DetallesCargos;

class LaboralesController extends Controller
{
    public function index()
    {
        //
        $personas = Persona::all();
        $datos['laborales'] = DatosLaborales::paginate(15);
        return view('persona.laboral.index', $datos, compact('personas'));
    }

    public function create($id)
    {
        //
        $cargos = DetallesCargos::all();
        $gerencias = Gerencia::all();
        $bancos = Banco::all();
        return view('persona.laboral.create',['id' => $id], compact('cargos', 'gerencias', 'bancos'));
    }

    public function store(Request $request, $id)
    {
        //
        $persona = Persona::findOrFail($id);
        $datoslaboral = request()->except('_token');
        $persona->laborData()->create($datoslaboral);
        return redirect('persona');
    }

    public function edit($id)
    {
        //
        return view('persona.laboral.edit');
    }

    public function update(Request $request, $id)
    {

        //
    }

    public function destroy($id)
    {
        //
    }
}

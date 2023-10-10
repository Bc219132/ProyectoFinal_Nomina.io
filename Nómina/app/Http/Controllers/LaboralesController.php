<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Generos;
use App\Models\DatosLaborales;
use App\Models\Gerencia;
use App\Models\Banco;
use App\Models\Cargo;

class LaboralesController extends Controller
{
    public function index()
    {
        //
        $datos['laborales'] = DatosLaborales::paginate(15);
        return view('persona.laboral.index', $datos);
    }

    public function create($id)
    {
        //
        return view('persona.laboral.create', ['id' => $id]);
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

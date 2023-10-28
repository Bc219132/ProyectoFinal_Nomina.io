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
use App\Models\Calculo_ads;

class LaboralesController extends Controller
{
    public function index()
    {
        //
        $personas = Persona::with('datosLaborales')->get();
        return view('persona.laboral.index', compact('personas'));
    }

    public function create($id)
    {
        //
        $cargos = DetallesCargos::all();
        $gerencias = Gerencia::all();
        $bancos = Banco::all();
        return view('persona.laboral.create', ['id' => $id], compact('cargos', 'gerencias', 'bancos'));
    }

    public function store(Request $request, $id)
    {
        //
        $persona = Persona::findOrFail($id);
        $datoslaboral = request()->except('_token');
        $persona->datosLaborales()->create($datoslaboral);
        return redirect('persona');
    }

    public function edit($id)
    {
        $bancos = Banco::all();
        $cargos = DetallesCargos::all();
        $gerencias = Gerencia::all();
        $laboral = DatosLaborales::findOrFail($id);
        return view('persona.laboral.edit', compact('cargos', 'gerencias', 'bancos', 'laboral'));
    }

    public function update(Request $request, $id)
    {
        // Realiza la validación de los datos actualizados
        $validated = $request->validate([
            'TipoContrato' => 'required',
            'id_banco' => 'required',
            'NCuentaBancaria' => 'required|regex:/\d{16,17}/',
            'TipoCuenta' => 'required',
            'NivelAcademico' => 'required',
            'id_detalles_cargos' => 'required',
            'FechaIngreso' => 'required|date',
            'FechaEgreso' => 'nullable|date',
        ]);

        // Actualiza los datos laborales con los valores validados
        DatosLaborales::findOrFail($id)->update($validated);

        return redirect('persona')->with('mensaje', 'Datos laborales actualizados exitosamente');
    }

    public function destroy($id)
    {
        //
    }
}

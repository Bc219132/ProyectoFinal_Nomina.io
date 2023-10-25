<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculo_ads;
use App\Models\DatosLaborales;

class Calculo_adController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->query('year', now()->year);
        $month = $request->query('month', now()->month);
        $fortnight = $request->query('fortnight', now()->day > 14 ? 2 : 1);
        $calculos = Calculo_ads::with('datosLaborales')->where([
            'Año' => $year,
            'Mes' => $month,
            'Periodo' => $fortnight,
        ])->get();

        return view('calculo.salario.index', compact('calculos'));
    }

    public function create()
    {
        //

    }



    public function store(Request $request)
    {
        $action = $request->input('action');


        $year = $request->input('year');
        $month = $request->input('month');
        $fortnight = $request->input('fortnight');

        if ($action == 'buscar') {
            return redirect()->route('calculo.index', compact('year', 'month', 'fortnight'));
        }

        $datosLaborales = DatosLaborales::all('id')->map(function ($obj) {
            return $obj->id;
        });

        foreach ($datosLaborales as $id) {
            Calculo_ads::create([
                'Año' => $year,
                'Mes' => $month,
                'Periodo' => $fortnight,
                'id_datos_laborales' => $id
                // Pendientes las deducciones y asignaciones
            ]);
        }

        return redirect()->route('calculo.index', compact('year', 'month', 'fortnight'));
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

    }
}

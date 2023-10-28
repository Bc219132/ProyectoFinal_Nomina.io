<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculo_ads;
use App\Models\DatosLaborales;
use App\Models\DetallesCargos;
use App\Models\Dolar;
use App\Models\Cestatikect;

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

        $datosLaborales = DatosLaborales::all();

        foreach ($datosLaborales as $datosLaboral) {

            $tasadolar = $datosLaboral->detallesCargos->dolars->TasaActual; //Obtener Dolar
            $Sueldo = $datosLaboral->detallesCargos->Sueldo; //Obtener Sueldo
            $SueldoMen_Bs = $tasadolar * $Sueldo; // Calcular Sueldo Mensual 
            $MontoCesta = $datosLaboral->detallesCargos->cestaTickes->montoCk; //Obtener CestaTikect
            $CestaTickest = ($fortnight === 1) ? $tasadolar * $MontoCesta : 0;
            $DiasTrabajados = ($SueldoMen_Bs / 30) * 15; //Calcular DiasTrabajados
            $Sso = (((650.00 * 12/52) * 0.04) * 5); //Calculo Sso
            $Rpe = (((13000.00 * 12/52)* 0.0050) * 5); //Calculo Rpe
            $Faov =  $SueldoMen_Bs * 0.0100;
            $Vacaciones = 0;
            $Utilidades = 0;
            $Ausencias = 0;
            $TotalA = $DiasTrabajados + $Vacaciones + $CestaTickest + $Utilidades;
            $TotalD = $Ausencias + $Sso + $Sso + $Faov;

            Calculo_ads::create([
                'Año' => $year,
                'Mes' => $month,
                'Periodo' => $fortnight,
                'id_datos_laborales' => $datosLaboral->id, 
                'SueldoMen_Bs' => $SueldoMen_Bs,
                'DiasTrabajados' => $DiasTrabajados,
                'CestaTickes' => $CestaTickest,
                'Sso' => $Sso,
                'Rpe' => $Rpe,
                'Faov' => $Faov,
                'Ausencias' => $Ausencias,
                'Vacaciones' => $Vacaciones,
                'Utilidades' => $Utilidades,

                //Total Asignación y Deducción
                'TotalA' => $TotalA,
                'TotalD' => $TotalD, 
                'TotalAbonar' => $TotalA - $TotalD,

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

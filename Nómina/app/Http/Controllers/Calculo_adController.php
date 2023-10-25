<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculo_ads;
use App\Models\DatosLaborales;
use App\Models\Persona;
use App\Models\DetallesCargos;

class Calculo_adController extends Controller
{
    public function index(){
        $laborales = DatosLaborales::all();
        $calculos = Calculo_ads::all();
        $personas = Persona::all();
        $detallesCargos = DetallesCargos::all();
    
        return view('calculo.salario.index', compact('laborales', 'calculos', 'personas', 'detallesCargos'));
    }

    public function calculossave(Request $request)
    {
        // Recopila los valores del formulario (año, mes, quincena)
        $año = $request->input('year');
        $mes = $request->input('month');
        $quincena = $request->input('quincena');

        // Obtén todos los registros de DatosLaborales
        $datosLaborales = DatosLaborales::all();

        // Recorre cada registro y crea un nuevo registro en Calculos_ad
        foreach ($datosLaborales as $datoLaboral) {
            $calculo = new Calculos_ad([
                'año' => $año,
                'Mes' => $mes,
                'Momento' => $quincena,
                // Otros campos que desees guardar en Calculos_ad
            ]);

            // Asocia el cálculo con el registro de DatosLaborales
            $datoLaboral->calculos()->save($calculo);
        }
    }

    public function create(){
       //
       
    }



    public function store(Request $request)
    {
        //
        
        
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

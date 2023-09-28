<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Generos;
use App\Models\DatosLaborales;
use App\Models\Gerencia;

class LaboralesController extends Controller
{
    public function index(){
        $datos['laborales']=DatosLaborales::paginate(5);
        return view('persona.laborales.index',$datos);
    }

    public function create(){
        return view('persona.laborales.create');
    }

    

    public function store(Request $request){
        
        $datosLaborales = request()->except('_token');
        DatosLaborales::insert($datosLaborales);
        return redirect('persona.laborales')->with('mensaje','Empleado Agregado exitosamente');
    }

    public function edit($id){
        $laborales=DatosLaborales::findOrFail($id);
        return view('persona.laborales.edit')->with('mensaje','Empleado Editado exitosamente');;
    }

    public function update(Request $request, $id){

        $laborales = request()->except(['_token','_method']);
        DatosLaborales::where('id' ,'=', $id)->update($laborales);

        $laborales=DatosLaborales::findOrFail($id);
        return redirect('persona.laborales');
    }

    public function destroy($id){
        DatosLaborales::destroy($id);
        return redirect('persona.laborales')->with('mensaje','Empleado Eliminado exitosamente');;
    }
}

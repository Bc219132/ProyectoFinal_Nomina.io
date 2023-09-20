<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        $datos['personas']=Persona::paginate(5);
        return view('persona.index',$datos);
    }

    public function create(){
            return view('persona.create');
    }

    

    public function store(Request $request){
        //$datosPersona = request()->all();
        $datosPersona = request()->except('_token');
        Persona::insert($datosPersona);
        return redirect('persona')->with('mensaje','Empleado Agregado exitosamente');
    }

    public function edit($id){

        $persona=Persona::findOrFail($id);
        return view('persona.edit', compact('persona'))->with('mensaje','Empleado Editado exitosamente');;
    }

    public function update(Request $request, $id){

        $datosPersona = request()->except(['_token','_method']);
        Persona::where('id' ,'=', $id)->update($datosPersona);

        $persona=Persona::findOrFail($id);
        return redirect('persona');
    }

    public function destroy($id){
        Persona::destroy($id);
        return redirect('persona')->with('mensaje','Empleado Eliminado exitosamente');;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Generos;

class PersonaController extends Controller
{
    public function index(){
        $datos['personas']=Persona::paginate(5);
        return view('persona.index',$datos);
    }

    public function create(){
        $generos = Generos::all();
        return view('persona.create', compact('generos'));
    }

    

    public function store(Request $request){
        //$datosPersona = request()->all();
        $datosPersona = request()->except('_token');
        Persona::insert($datosPersona);
        return redirect('persona')->with('mensaje','Empleado Agregado exitosamente');
    }

    public function edit($id){
        $generos = Generos::all();
        $persona=Persona::findOrFail($id);
        return view('persona.edit', compact('persona'), compact('generos'))->with('mensaje','Empleado Editado exitosamente');;
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

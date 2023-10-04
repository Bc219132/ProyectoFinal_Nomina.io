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
    public function index(){
        //
        $datos['laborales']=DatosLaborales::paginate(5);
        return view('persona.laboral.index',$datos);
    }

    public function create(){
        //
        return view('persona.laboral.create');
    }

    

    public function store(Request $request, $id){
        //
        $persona=Persona::findOrFail($id);

        $post =new Post;
        $post->id_personas = $request->input('persona');

        $datoslaboral = request()->except('_token');
        DatosLaborales::insert($datoslaboral);
        return view('persona',compact('persona'));

    }

    public function edit($id){
       //
       return view('persona.laboral.edit');
    }

    public function update(Request $request, $id){

       //
    }

    public function destroy($id){
        //
    }
}

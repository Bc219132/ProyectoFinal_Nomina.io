<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banco;

class BancoController extends Controller
{
    public function index(){
        $datos['bancos'] = Banco::paginate(15);
        return view('persona.banco.index', $datos);
    }

    public function create(){
       //
       return view('persona.banco.create');
    }



    public function store(Request $request)
    {
        //
        //$datosBanco = request()->all();
        $datosBanco = request()->except('_token');
        banco::insert($datosBanco);
        return redirect('banco')->with('mensaje', 'Guardado exitosamente');
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
        Banco::destroy($id);
        return redirect('banco');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Sueldo;

class CargoController extends Controller
{
    public function index(){
        $datos['cargos'] = Cargo::paginate(15);
        return view('persona.cargo.index', $datos);
    }

    public function create(){
       //
       return view('persona.cargo.create');
    }



    public function store(Request $request)
    {
        //
        $datosCargo = request()->except('_token');
        banco::insert($datosCargo);
        return redirect('cargo')->with('mensaje', 'Guardado exitosamente');
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
        return redirect('cargo');
    }
}
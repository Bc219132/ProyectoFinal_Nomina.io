<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesCargos;
use App\Models\Sueldo;

class CargoController extends Controller
{
    public function index(){
        $datos['cargos'] = DetallesCargos::paginate(15);
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
        DetallesCargos::insert($datosCargo);
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
        DetallesCargos::destroy($id);
        return redirect('cargo');
    }
}
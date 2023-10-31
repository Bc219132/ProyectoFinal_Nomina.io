<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesCargos;
use App\Models\Sueldo;
use App\Models\Cestatikect;
use App\Models\Gerencia;
use App\Models\Dolar;

class CargoController extends Controller
{
    public function index(){

        $gerencias = Gerencia::all();
        $cestatikects = Cestatikect::all();
        $dolars = Dolar::all();
        $datos['cargos'] = DetallesCargos::paginate(15);

        return view('persona.cargo.index', $datos, compact('gerencias','cestatikects','dolars'));
    }

    public function create(){
        return view('persona.cargo.create');
    }
     
    public function store(Request $request)
    {
        //
        //$datosCargo = request()->all();
        $datoscargo = request()->except('_token');
        DetallesCargos::insert($datoscargo);
        return redirect('cargo')->with('mensaje', ' Cargo Guardado exitosamente');
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
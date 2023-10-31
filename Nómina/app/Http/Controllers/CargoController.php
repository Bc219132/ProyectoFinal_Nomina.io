<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesCargos;
use App\Models\Sueldo;
use App\Models\Cestatikect;
use App\Models\Gerencia;

class CargoController extends Controller
{
    public function index(){

        $gerencias = Gerencia::all();
        $cestatikects = Cestatikect::all();
        $datos['cargos'] = DetallesCargos::paginate(15);

        return view('persona.cargo.index', $datos, compact('gerencias','cestatikects'));
    }

    public function create(){
        $gerencias = Gerencia::all();
        return view('persona.cargo.create', compact('gerencias'));
    }
     
     public function store(Request $request)
     {
         $gerencias = null; // Define $gerencias si es necesario
         // Resto del código
     }
     
     public function edit($id)
     {
         $gerencias = null; // Define $gerencias si es necesario
         // Resto del código
     }
     
     public function update(Request $request, $id)
     {
         $gerencias = null; // Define $gerencias si es necesario
         // Resto del código
     }
     
     public function destroy($id)
     {
         $gerencias = null; // Define $gerencias si es necesario
         // Resto del código
     }
}
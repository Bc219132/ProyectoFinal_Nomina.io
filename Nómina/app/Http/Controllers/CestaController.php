<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cestatikect;

class CestaController extends Controller
{
    public function index(){
      $datos['cestas'] = Cestatikect::paginate(15);
      return view('persona.cesta.index', $datos);
    }

    public function create(){
       //
    }



    public function store(Request $request)
    {
        //
        $datosCestas= $request()->except(['_token']);
    }

    public function edit($id)
    {
       //
       $cestas = Cestatikect::findOrFail($id);
       return view('persona.cesta.edit', compact('cestas'))->with('mensaje', 'CestaTicket Actualizado correctamente')->with('mensaje', 'Editado exitosamente');;
    }

    public function update(Request $request, $id)
   {
      $datosCestas = $request->except(['_token', '_method']);
      
      // No es necesario establecer 'FechaActual' aquí, se hará automáticamente
      Cestatikect::where('id', $id)->update($datosCestas);

      // Redirigir con un mensaje
      return redirect('cesta')->with('mensaje', 'Dolar Actualizado correctamente');
   }

    public function destroy($id)
    {
        //
    }
}


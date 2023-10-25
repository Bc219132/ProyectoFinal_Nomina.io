<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolar;

class DolarController extends Controller
{
    public function index(){
      $datos['dolares'] = Dolar::paginate(15);
      return view('persona.dolar.index', $datos);
    }

    public function create(){
       //
    }



    public function store(Request $request)
    {
        //
        $datosDolar= $request()->except(['_token']);
    }

    public function edit($id)
    {
       //
       $dolar = Dolar::findOrFail($id);
       return view('persona.dolar.edit', compact('dolar'))->with('mensaje', 'Dolar Actualizado correctamente')->with('mensaje', 'Editado exitosamente');;
    }

    public function update(Request $request, $id)
   {
      $datosDolar = $request->except(['_token', '_method']);
      
      // No es necesario establecer 'FechaActual' aquí, se hará automáticamente
      Dolar::where('id', $id)->update($datosDolar);

      // Redirigir con un mensaje
      return redirect('dolar')->with('mensaje', 'Dolar Actualizado correctamente');
   }

    public function destroy($id)
    {
        //
    }
}

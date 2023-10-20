<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Generos;

class PersonaController extends Controller
{
    public function index()
    {
        $datos['personas'] = Persona::paginate(15);
        return view('persona.index', $datos);
    }

    public function create()
    {
        $generos = Generos::all();
        return view('persona.create', compact('generos'));
    }



    public function store(PersonStoreRequest $request)
    {
        $validated = $request->validated();
        $data = [
            'PrimerNombre' => $validated->firstName,
            'SegundoNombre' => $validated->secondName,
            'PrimerApellido' => $validated->lastName,
            'SegundoApellido' => $validated->secondLastName,
            'TipoDocumento' => $validated->identificationType,
            'Cedula' => $validated->identification,
            'id_genero' => $validated->genre,
            'FechaNacimiento' => $validated->birthdate,
            'RIF' => $validated->rif
        ];
        $person = Persona::create($data);
        return redirect("persona/$person->id/laboral/create")->with('mensaje', 'Empleado Agregado exitosamente');
    }

    public function edit($id)
    {
        $generos = Generos::all();
        $persona = Persona::findOrFail($id);
        return view('persona.edit', compact('persona'), compact('generos'))->with('mensaje', 'Empleado Editado exitosamente');;
    }

    public function update(Request $request, $id)
    {

        $datosPersona = request()->except(['_token', '_method']);
        Persona::where('id', '=', $id)->update($datosPersona);

        $persona = Persona::findOrFail($id);
        return redirect('persona');
    }

    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect('persona')->with('mensaje', 'Empleado Eliminado exitosamente');;
    }
}

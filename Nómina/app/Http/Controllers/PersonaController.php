<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Http\Requests\PersonUpdateRequest;
use App\Models\Persona;
use App\Models\Generos;
use App\Models\DatosLaborales;
use App\Models\DetallesCargos;

class PersonaController extends Controller
{
    public function index()
    {
        $datos['personas'] = Persona::paginate(15);
        $personas = Persona::with('datosLaborales')->get();
        return view('persona.index', $datos, compact('personas'));
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
            'PrimerNombre' => $validated['firstName'],
            'SegundoNombre' => $validated['secondName'],
            'PrimerApellido' => $validated['lastName'],
            'SegundoApellido' => $validated['secondLastName'],
            'TipoDocumento' => $validated['identificationType'],
            'Cedula' => $validated['identification'],
            'id_genero' => $validated['genre'],
            'FechaNacimiento' => $validated['birthdate'],
            'RIF' => $validated['rif']
        ];
        $person = Persona::create($data);
        return redirect("persona/$person->id/laboral/create")->with('mensaje', 'Empleado Agregado exitosamente');
    }

    public function edit($id)
    {
        $generos = Generos::all();
        $persona = Persona::findOrFail($id);
        return view('persona.edit', compact('persona','generos'))->with('mensaje', 'Empleado Editado exitosamente');;
    }

    public function update(PersonUpdateRequest $request, $id)
    {
        $validated = $request->validated();
        $data = [
            'PrimerNombre' => $validated['firstName'],
            'SegundoNombre' => $validated['secondName'],
            'PrimerApellido' => $validated['lastName'],
            'SegundoApellido' => $validated['secondLastName'],
            'TipoDocumento' => $validated['identificationType'],
            'Cedula' => $validated['identification'],
            'id_genero' => $validated['genre'],
            'FechaNacimiento' => $validated['birthdate'],
            'RIF' => $validated['rif']
        ];
        Persona::findOrFail($id)->update($data);
        return redirect('persona');
    }

    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect('persona')->with('mensaje', 'Empleado Eliminado exitosamente');;
    }
}

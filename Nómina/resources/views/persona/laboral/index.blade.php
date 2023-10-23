@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <h2>Listado de Empleados </h2>
    </ul>

    <br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th><b></b>Nombre y Apellido</b></th>
            <th><b>Cédula</b></th>
            <th><b>Gerencia</b></th>
            <th><b>Cargo</b></th>
            <th><b>Opción</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->PrimerNombre }}
                        {{ $persona->PrimerApellido }}
                    </td>
                    <td>{{ $persona->Cedula }}</td>
                    <td>
                        @if (
                            !empty($persona->datosLaborales) &&
                                !empty($persona->datosLaborales->detallesCargos) &&
                                !empty($persona->datosLaborales->detallesCargos->gerencia))
                            {{ $persona->datosLaborales->detallesCargos->gerencia->TipoGerencia }}
                        @endif
                    </td>
                    <td>
                        @if (!empty($persona->datosLaborales) && !empty($persona->datosLaborales->detallesCargos))
                            {{ $persona->datosLaborales->detallesCargos->TipoCargo }}
                        @endif
                    </td>
                    @if (!$persona->datosLaborales)
                        <td>
                            <a href="{{ route('persona.laboral.create', ['persona' => $persona->id]) }}"
                                class="btn btn-warning">
                                Agregar Datos Laborales
                            </a>
                        </td>
                    @else
                        <td>
                            <a href="{{ route('laboral.edit', ['laboral' => $persona->datosLaborales->id]) }}"
                                class="btn btn-warning">
                                Actualizar Datos Laborales
                            </a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection

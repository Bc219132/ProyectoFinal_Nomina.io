@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>Listado de Empleados Activos</h2>
        </i>
        <a href="{{ url('persona/create') }}" class="btn btn-secondary"> Registrar nuevo empleado </a>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th>Nombre y Apellido</th>
            <th>Cédula</th>
            <th>Gerencia</th>
            <th>Cargo</th>
            <th>Fecha de Ingreso</th>
            <th>Fecha de Egreso</th>
            <th>Opción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>
                        <a href="{{ url('/persona/' . $persona->id . '/edit') }}">{{ $persona->PrimerNombre }}</a>
                        <a href="{{ url('/persona/' . $persona->id . '/edit') }}">{{ $persona->PrimerApellido }}</a>
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
                    <td>
                        @if (!empty($persona->datosLaborales))
                            {{ $persona->datosLaborales->FechaIngreso }}
                        @endif
                    </td>
                    <td>
                        @if (!empty($persona->datosLaborales))
                            {{ $persona->datosLaborales->FechaEgreso }}
                        @endif
                    </td>
                    <td>
                        <form action="{{ url('/persona/' . $persona->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Desea borrar registro?')" class="btn btn-danger"
                                value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <script>
        window.addEventListener('popstate', function(event) {
            window.history.pushState(null, document.title, window.location.href);
        });
    </script>
@endsection

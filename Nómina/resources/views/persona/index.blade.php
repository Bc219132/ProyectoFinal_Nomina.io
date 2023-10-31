@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    <ul>
        <i>
            @if (Session::has('mensaje'))
                <span style="color: green; font-weight: bold;">
                    {{ Session::get('mensaje') }}
                </span>
            @endif
        </i>
        <i>
            <h2>Listado de Empleados Activos</h2>
        </i>
        <a href="{{ url('persona/create') }}" class="btn btn-secondary"> Registrar nuevo empleado </a>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead>
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
                        <div style="display: inline-block;">
                            @if ($persona->datosLaborales == null)
                                <form action="{{ url('/persona/' . $persona->id) }}" class="d-inline" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="submit" onclick="return confirm('¿Desea borrar registro?')"
                                        class="btn btn-danger" value="BORRAR">
                                </form>
                            @endif
                        </div>

                        <div style="display: inline-block;">
                            @isset($persona->datosLaborales)
                                <a href="{{ route('laboral.edit', ['laboral' => $persona->datosLaborales->id]) }}"
                                    class="btn btn-warning">ESTAT/EDIC</a>
                            @endisset
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $personas->links('pagination::bootstrap-4') }}
    <script>
        window.addEventListener('popstate', function(event) {
            window.history.pushState(null, document.title, window.location.href);
        });
    </script>
@endsection

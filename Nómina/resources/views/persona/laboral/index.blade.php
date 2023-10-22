@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if(Session::has('mensaje'))
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
                <th ><b></b>Nombre y Apellido</b></th>
                <th><b>Cédula</b></th>
                <th><b>Gerencia</b></th>
                <th><b>Cargo</b></th>
                <th><b>Opción</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                @if (empty($persona->datosLaborales->detallesCargos->gerencia))
                    <tr>
                        <td>{{ $persona->PrimerNombre }}
                            {{ $persona->PrimerApellido}}
                        </td>
                        <td>{{ $persona->Cedula }}</td>
                        <td>
                            @if (!empty($persona->datosLaborales) && !empty($persona->datosLaborales->detallesCargos))
                                {{ $persona->datosLaborales->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            @if (!empty($persona->datosLaborales) && !empty($persona->datosLaborales->detallesCargos))
                                {{ $persona->datosLaborales->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('#') }}" class="btn btn-warning">
                                Agregar Datos Laborales
                            </a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>    

    </table>    

    <script>
        window.addEventListener('popstate', function (event) {
            window.history.pushState(null, document.title, window.location.href);
        });
    </script>
@endsection
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
            <h2>Listado de Cargos</h2>
        </i>
        <a href="{{ url('#') }}" class="btn btn-secondary" data-toggle="modal" data-target="#modalCreateCargo"> Registrar
            nuevo Cargo </a>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead>
            <tr>
            <tr></tr>
            <th>ID</th>
            <th>Tipo de Cargo</th>
            <th>Sueldo</th>
            <th>Gerencia</th>
            <th>Opción</th>
            </tr>
        </thead>
        @foreach ($cargos as $cargo)
            <tr>
                <td>{{ $cargo->id }}</td>
                <td>{{ $cargo->TipoCargo }}</td>
                <td>{{ $cargo->Sueldo }}</td>
                <th>{{ $cargo->gerencia->TipoGerencia}}</th>
                <td>
                    <form action="{{ url('/cargo/' . $cargo->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                            value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    @include('persona.cargo.create')
@endsection

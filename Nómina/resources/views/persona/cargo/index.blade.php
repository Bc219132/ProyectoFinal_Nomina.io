@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>Listado de Cargos</h2>
        </i>
        <a href="{{ url('#') }}" class="btn btn-secondary" data-toggle="modal" data-target="#modalCreateCargo"> Registrar
            nuevo Banco </a>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th>ID</th>
            <th>Tipo de Cargo</th>
            <th>Sueldo</th>
            <th>CestaTikect</th>
            <th>Gerencia</th>
            <th>Opción</th>
            </tr>
        </thead>
        @foreach ($cargos as $cargo)
            <tr>
                <td>{{ $cargo->id }}</td>
                <td>{{ $cargo->TipoCargo }}</td>
                <td>{{ $cargo->Sueldo }}</td>
                <th>{{ $cargo->id_cestatikect }}</th>
                <th>{{ $cargo->id_gerencia }}</th>
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

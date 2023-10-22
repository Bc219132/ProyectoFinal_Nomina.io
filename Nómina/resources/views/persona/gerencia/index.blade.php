@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>Listado de Gerencia</h2>
        </i>
        <a href="{{ url('#') }}" class="btn btn-secondary" data-toggle="modal" data-target="#modalCreateGerencia">
            Registrar nuevo Banco </a>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th>ID</th>
            <th>Nombre de Gerencia</th>
            <th>Opción</th>
            </tr>
        </thead>
        @foreach ($gerencias as $gerencia)
            <tr>
                <td>{{ $gerencia->id }}</td>
                <td>{{ $gerencia->TipoGerencia }}</td>
                <td>
                    <form action="{{ url('/gerencia/' . $gerencia->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                            value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    @include('persona.gerencia.create')
@endsection

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
            <h2>Listado de Generos</h2>
        </i>
        <a href="{{ url('#') }}" class="btn btn-secondary" data-toggle="modal" data-target="#modalCreateGenero"> Registrar
            nuevo Genero </a>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead>
            <tr>
            <tr></tr>
            <th>ID</th>
            <th>Tipo de Genero</th>
            <th>Opción</th>
            </tr>
        </thead>
        @foreach ($generos as $genero)
            <tr>
                <td>{{ $genero->id }}</td>
                <td>{{ $genero->Tipo_Genero }}</td>
                <td>
                    <form action="{{ url('/genero/' . $genero->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                            value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    @include('persona.genero.create')
@endsection

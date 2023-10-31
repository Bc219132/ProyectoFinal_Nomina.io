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
            <h2>Listado de Usuarios</h2>
        </i>
        <br>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead>
            <tr>
            <tr></tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->Nombre_Usuario }}</td>
                    <td>{{ $user->id_roles }}</td>
                    <td>
                        <form action="{{ url('/user/' . $user->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                                value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>


@endsection

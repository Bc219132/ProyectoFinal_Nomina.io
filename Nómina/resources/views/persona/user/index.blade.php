@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
        <h2>Listado de Usuarios</h2>
        </i>
        <br>
    </ul>   

    <br><br><br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
                <tr></tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $users as $user)
                <tr>
                    <td>{{$user->id }}</td>
                    <td>{{$user->Nombre_Usuario }}</td>
                    <td>{{$user->id_roles}}</td>
                    <td>
                        <a href="#" class="btn btn-warning">
                            Editar
                        </a>
                         | 
                        <form action="#" class="d-inline"  method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                            value="Borrar">
                        </form> | <a href="{{ url('#') }}" class="btn btn-success">
                            Ascender
                        </a> | <a href="{{ url('#') }}" class="btn btn-light">
                            Detalle
                        </a>
                    
                    </td>

                </tr>
            @endforeach
        </tbody>    

    </table>    

    
@endsection
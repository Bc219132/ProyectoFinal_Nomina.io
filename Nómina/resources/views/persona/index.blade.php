@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
        <h2>Listado de Empleados Activos</h2>
        </i>
        <a href="{{ url('persona/create') }}" class="btn btn-secondary" > Registrar nuevo empleado </a>
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
            </tr>
        </thead>
        <tbody>
            @foreach( $personas as $persona)
                <tr>
                    <td>
                    <a href="{{url(('/persona/'.$persona->id.'/edit'))}}">{{$persona->PrimerNombre }}</a>
                    <a href="{{url(('/persona/'.$persona->id.'/edit'))}}">{{$persona->PrimerApellido }}</a>
                    </td>
                    <td>{{$persona->Cedula }}</td>
                    <td>{{$persona->Cedula }}</td>
                    <td>{{$persona->Cedula }}</td>
                    <td>{{$persona->Cedula }}</td>
                    <td>{{$persona->Cedula }}</td>
                    <!-- <td>
                       <a href="{{ url('/persona/'.$persona->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>
                         | 
                        <form action="{{ url('/persona/'.$persona->id)}}" class="d-inline"  method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                            value="Borrar">
                        </form> | <a href="{{ url('#') }}" class="btn btn-success">
                            Ascender
                        </a> | <a href="{{ url('#') }}" class="btn btn-light">
                            Detalle
                        </a>
                    
                    </td>-->

                </tr>
            @endforeach
        </tbody>    

    </table>    

    
@endsection
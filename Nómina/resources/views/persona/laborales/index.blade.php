@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
        <h2>Registro de Datos Laborales</h2>
        </i>
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
                <th>Tipo de Contrato</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $laborales as $laboral)
                <tr>
                    <td>{{$laboral->id }}</td>
                    <td>{{$laboral->id }}</td>
                    <td>{{$laboral->id_gerencia }}</td>
                    <td>{{$laboral->id_cargo }}</td>
                    <td>{{$laboral->TipoContrato }}</td>
                    <td>Editar|Eliminar</td>
                    <!-- <td>
                       <a href="{{ url('/persona/laborales/'.$laboral->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>
                         | 
                        <form action="{{ url('/persona/laborales/'.$laboral->id)}}" class="d-inline"  method="post">
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
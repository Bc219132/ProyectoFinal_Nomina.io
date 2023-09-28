@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
            <h2>REGISTRO DE NUEVO EMPLEADO</h2>
        </i>   

        <br><br>

        <form action="{{ url('/persona')}}" method="post" class="form-inline">
            @csrf
            <br><br><br>
            @include('persona.form',['modo'=>'Agregar'])
        
        </form>
    </ul>
@endsection
@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    
    <h2>REGRISTRO DE NUEVO EMPLEADO</h2>
    

        <form action="{{ url('/persona')}}" method="post" >
            @csrf

            <br><br><br>
            @include('persona.form',['modo'=>'Agregar']);
        </form>

@endsection
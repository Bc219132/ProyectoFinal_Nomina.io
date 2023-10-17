@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
            <h2 class="text-center"><b>REGISTRO DE NUEVO EMPLEADO</b></h2>
        </i>   

        <br><br>

        <form action="{{ url('/persona')}}" method="post" class="form-inline "  >
            @csrf
            <br><br><br>
            @include('persona.form',['modo'=>'Agregar'])
        
        </form>
    </ul>
@endsection
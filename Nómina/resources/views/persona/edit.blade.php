@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
            <h2>EDICIÓN DE REGISTRO</h2>
        </i>

        <br><br>
        
        <form action="{{ url('/persona/'.$persona->id )}}" method="post" class="form-inline">
            @csrf
            {{ method_field('PATCH') }}
            <br><br><br>
            @include('persona.form',['modo'=>'Editar'])

        </form>
    </ul>
@endsection
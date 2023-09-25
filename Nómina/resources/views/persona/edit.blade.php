@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    
    <h2>EDICIÓN DE REGISTRO</h2>
    
    <form action="{{ url('/persona/'.$persona->id )}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <br><br><br>
        @include('persona.form',['modo'=>'Editar']);

    </form>
@endsection
@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
            <h2>PROCESO DE DATOS LABORALES</h2>
        </i>   

        <br><br>

        <form action="{{ url('/laboral/'.$laboral->id)}}" method="post" class="form-inline">
            @csrf
            {{ method_field('PATCH') }}
            <br><br><br>
            @include('persona.laboral.form');

        </form>
    </ul>
@endsection
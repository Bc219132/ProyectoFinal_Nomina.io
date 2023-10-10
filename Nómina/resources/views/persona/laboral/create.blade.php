@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
            <h2>Proceso de Datos Laborales</h2>
        </i>
        <form action="{{ url("/persona/$id/laboral")}}" method="post">
            @csrf
            @include('persona.laboral.form');


        </form>

    </ul>
@endsection

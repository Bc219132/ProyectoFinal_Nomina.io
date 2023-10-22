@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
        <h2 class="text-center"><b>PROCESO DE DATOS LABORALES</b></h2>
        </i>
        <br><br>
        <form action="{{ url("/persona/$id/laboral")}}" method="post" class="form-inline ">
            @csrf
            
            @include('persona.laboral.form');


        </form>

    </ul>
@endsection

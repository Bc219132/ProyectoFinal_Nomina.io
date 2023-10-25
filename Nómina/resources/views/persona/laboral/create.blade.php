@extends('layouts.Admin')
@section('title', 'Registro')

@section('Contenido')
    <div class="mx-auto">
        <h2 class="text-center"><b><i>PROCESO DE DATOS LABORALES</i></b></h2>
        
        <form action="{{ url("/persona/$id/laboral") }}" method="post">
            @csrf
            @include('persona.laboral.form');
        </form>
    </div>
@endsection


@extends('layouts.Admin')


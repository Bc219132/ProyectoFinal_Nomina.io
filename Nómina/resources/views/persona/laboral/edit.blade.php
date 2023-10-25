@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <div class="mx-auto"> 
        <h2 class="text-center mb-4"><b><i>PROCESO DE DATOS LABORALES</i></b></h2>   
            <form action="{{ url('/laboral/' . $laboral->id) }}" method="post">
                @csrf
                {{ method_field('PATCH') }}
                @include('persona.laboral.form');
            </form>
    </div>
@endsection

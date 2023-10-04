@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <ul>
        <i>
            <h2>Proceso de Datos Laborales</h2>
        </i>   

        <br><br>

        <form action="{{ url('/laboral')}}" method="post">
            @csrf
            @include('persona.laboral.form');
            

        </form>
        
    </ul>
@endsection
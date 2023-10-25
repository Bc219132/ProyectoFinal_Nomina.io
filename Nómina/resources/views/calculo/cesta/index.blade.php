@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>Proceso de Pre-CestaTikets</h2>
        </i>
        
        <br>
    </ul>

@endsection

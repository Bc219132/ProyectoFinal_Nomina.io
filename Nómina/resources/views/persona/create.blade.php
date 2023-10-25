@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <div class="mx-auto">
        <h2 class="text-center"><b><i>REGISTRO DE NUEVO EMPLEADO</i></b></h2>

        <form action="{{ route('persona.store') }}" method="post">
            @csrf
            @include('persona.form', ['modo' => 'Agregar'])
        </form>
    </div>
@endsection

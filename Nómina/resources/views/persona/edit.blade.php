@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')
    <div class="mx-auto">
        <h2 class="text-center mb-4"><b><i>EDITAR EMPLEADO EMPLEADO</i></b></h2>
        <form action="{{ route('persona.update', ['persona' => $persona->id]) }}" method="post">
            @csrf
            @method('PATCH')
            @include('persona.form', ['modo' => 'Editar'])
        </form>
    </div>
@endsection

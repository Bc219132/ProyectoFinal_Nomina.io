@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>ACTUALIZACIÓN Y VISTA DEL CESTATICKET</h2>
        </i>
    </ul>

    <br><br>
    <table class="table table-light">
            @foreach ($cestas as $cesta)

            @endforeach
        </tbody>
    </table>
    @include('persona.cesta.edit')
@endsection

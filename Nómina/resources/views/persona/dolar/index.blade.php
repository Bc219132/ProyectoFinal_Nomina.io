@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    <ul>
        <i>
            @if (Session::has('mensaje'))
                <span style="color: green; font-weight: bold;">
                    {{ Session::get('mensaje') }}
                </span>
            @endif
        </i>
        <i>
            <h2>ACTUALIZACIÓN Y VISTA DEL DOLAR</h2>
        </i>
    </ul>

    <br><br>
    <table class="table table-light">
            @foreach ($dolares as $dolar)

            @endforeach
        </tbody>
    </table>
    @include('persona.dolar.edit')
@endsection

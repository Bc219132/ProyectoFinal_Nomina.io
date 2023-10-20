@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>Listado de Empleados Activos</h2>
    </ul>

    <br><br><br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th>Nombre y Apellido</th>
            <th>Cargo</th>
            <th>Gerencia</th>
            <th>Tipo de Contrato</th>
            <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laborales as $laboral)
                <tr>
                    <td>{{ $laboral->TipoContrato }}</td>
                    <td>{{ $laboral->TipoContrato }}</td>
                    <td>{{ $laboral->TipoContrato }}</td>
                    <td>{{ $laboral->TipoContrato }}</td>
                    <td>Incluir - Datos Laborales</td>
                </tr>
            @endforeach
        </tbody>

    </table>


@endsection

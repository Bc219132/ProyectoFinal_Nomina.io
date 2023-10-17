@extends('Layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
        <h2>Listado de Bancos</h2>
        </i>
        <a href="{{ url('#') }}" class="btn btn-secondary" data-toggle="modal" data-target="#modalCreateBanco" > Registrar nuevo Banco </a>
        <br>
    </ul>   

    <br><br><br><br>
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
                <tr></tr>
                <th>Códgio del Banco</th>
                <th>Entidad Bancaria</th>
                <th>Opción</th>
            </tr>
        </thead>
        @foreach ($bancos as $banco)
        <tr>
            <td>{{ str_pad($banco->id, 4, '0', STR_PAD_LEFT) }}</td> 
            <td>{{$banco->NombreBanco }}</td>
            <td>
                <form action="{{ url('/banco/'.$banco->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input type="submit" onclick ="return confirm('¿Desea borrar registro?') " class="btn btn-danger"
                    value="Borrar">
                </form>
            </td>
        </tr>
            
        @endforeach

    </table>    

  @include('persona.banco.create')  
@endsection
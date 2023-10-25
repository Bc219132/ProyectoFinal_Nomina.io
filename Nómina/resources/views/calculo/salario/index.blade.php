@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif

    <ul>
        <i>
            <h2>Proceso de Pre-Nómina</h2>
            
        </i>
        <br>
        <th>
            <div class="d-flex">
                <!-- Formulario para seleccionar el año -->
                <form method="GET" class="mr-3">
                    <div class="form-group">
                        <label for="selectYear">Año:</label>
                        <select name="year" id="selectYear" class="form-control">
                            @php
                            $currentYear = date('Y');
                            $endYear = $currentYear + 10;
                            @endphp
                            @for ($year = $currentYear; $year <= $endYear; $year++)
                                <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                </form>
            
                <!-- Formulario para seleccionar el mes -->
                <form method="GET" class="mr-3">
                    <div class="form-group">
                        <label for="selectMonth">Mes:</label>
                        <select name="month" id="selectMonth" class="form-control">
                            @php
                            $months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                            @endphp
                            @foreach ($months as $key => $month)
                                <option value="{{ $key + 1 }}" {{ request('month') == ($key + 1) ? 'selected' : '' }}>{{ $month }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            
                <!-- Formulario para seleccionar la quincena -->
                <form method="GET" class="mr-3">
                    <div class="form-group">
                        <label for="selectQuincena">Quincena:</label>
                        <select name="quincena" id="selectQuincena" class="form-control">
                            <option value="1" {{ request('quincena') == 1 ? 'selected' : '' }}>Quincena 1</option>
                            <option value="2" {{ request('quincena') == 2 ? 'selected' : '' }}>Quincena 2</option>
                        </select>
                    </div>
                </form>
            
                <div class="d-flex">
                    <!-- ... (otros formularios) ... -->
                
                    <!-- Botón para calcular con estilo personalizado -->
                    <form method="POST" action="#" class="mr-3">
                        @csrf
                        <button type="submit" class="btn btn-secondary" style="margin-top: 30px;">Calcular</button>
                    </form>

                    <form method="POST" action="#" class="mr-3">
                        @csrf
                        <button type="submit" class="btn btn-secondary" style="margin-top: 30px;">Generar total a pagar</button>
                    </form>
                    
                    <!-- Contenedor para el enlace y el botón -->
                    <div class="d-flex align-items-center">
                        <!-- Actualizar $ -->
                        <a href="{{ url('dolar') }}" class="btn btn-primary mr-3">Ver/Editar Dolar</a>
                    </div>
                </div>
            
            </div>
        </th>
    </ul>

    <br><br><br><br>
    
    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th>Empleado</th>
            <th>Cédula</th>
            <th>Cargo</th>
            <th>Salario Mensual</th>
            <th>Salario Quincenal</th>
            <th>Asignación</th>
            <th>Deducción</th>
            <th>Monto a Pagar</th>
            <th>Opciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($laborales as $laboral)
                @php
                    $fechaEgreso = \Carbon\Carbon::parse($laboral->FechaEgreso);
                    $fechaActual = \Carbon\Carbon::now();
                @endphp

                 @if (empty($laboral->FechaEgreso) || $fechaEgreso->greaterThanOrEqualTo($fechaActual))
                    <tr>
                        <td>
                            @if (
                                !empty($laboral->persona) && 
                                !empty($laboral->persona->PrimerNombre) && 
                                !empty($laboral->persona->PrimerApellido))
                                {{ $laboral->persona->PrimerNombre }} 
                                {{ $laboral->persona->PrimerApellido }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->persona) && 
                                !empty($laboral->persona->Cedula))
                                {{ $laboral->persona->Cedula }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->persona) && 
                                !empty($laboral->persona->Cedula))
                                {{ $laboral->persona->Cedula }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->detallesCargos) && 
                                !empty($laboral->detallesCargos->TipoCargo))
                                {{ $laboral->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->detallesCargos) && 
                                !empty($laboral->detallesCargos->TipoCargo))
                                {{ $laboral->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->detallesCargos) && 
                                !empty($laboral->detallesCargos->TipoCargo))
                                {{ $laboral->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->detallesCargos) && 
                                !empty($laboral->detallesCargos->TipoCargo))
                                {{ $laboral->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            @if (
                                !empty($laboral->detallesCargos) && 
                                !empty($laboral->detallesCargos->TipoCargo))
                                {{ $laboral->detallesCargos->TipoCargo }}
                            @endif
                        </td>   
                        <td>
                            <form action="{{ url('#') }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Desea borrar registro?')" class="btn btn-danger"
                                    value="+"> |
                            </form>
                            <form action="{{ url('#') }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Desea borrar registro?')" class="btn btn-danger"
                                    value="-"> 
                            </form>
                        </td>
                    </tr>
                @endif    
            @endforeach
        </tbody>
    </table>    

@endsection

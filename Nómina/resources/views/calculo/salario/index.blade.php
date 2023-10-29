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
            <form class="d-flex" method="POST" action="{{ route('calculo.store') }}">
                @csrf
                <!-- Formulario para seleccionar el año -->
                <div class="form-group mr-2">
                    <label for="selectYear">Año:</label>
                    <select name="year" id="selectYear" class="form-control">
                        @php
                            $currentYear = date('Y');
                            $endYear = $currentYear + 10;
                        @endphp
                        @for ($year = $currentYear; $year <= $endYear; $year++)
                            <option value="{{ $year }}" @selected($year == request()->query('year'))>
                                {{ $year }}</option>
                        @endfor
                    </select>
                </div>

                <!-- Formulario para seleccionar el mes -->
                <div class="form-group mr-2">
                    <label for="selectMonth">Mes:</label>
                    <select name="month" id="selectMonth" class="form-control">
                        @php
                            $months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                        @endphp
                        @foreach ($months as $key => $month)
                            <option value="{{ $key + 1 }}" @selected($key + 1 == request()->query('month'))>
                                {{ $month }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Formulario para seleccionar la quincena -->
                <div class="form-group mr-2">
                    <label for="fortnight">Quincena:</label>
                    <select name="fortnight" id="fortnight" class="form-control">
                        @for ($i = 1; $i < 3; $i++)
                            <option value="{{ $i }}" @selected($i == request()->query('fortnight'))>Quincena {{ $i }}
                            </option>
                        @endfor
                    </select>
                </div>

                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-secondary mr-2" name="action" value="calcular">Calcular</button>
                    <button type="submit" class="btn btn-secondary mr-2" name="action" value="buscar">Buscar</button>
                    <button type="submit" class="btn btn-secondary mr-2">Generar total a
                        pagar</button>
                </div>

            </form>
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
            <th>Asignación</th>
            <th>Deducción</th>
            <th>Monto a Pagar</th>
            <th>Opciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($calculos as $calculo)
                @php
                    $laboral = $calculo->datosLaborales;
                    $fechaEgreso = \Carbon\Carbon::parse($laboral->FechaEgreso);
                    $fechaActual = \Carbon\Carbon::now();
                @endphp

                @if (empty($laboral->FechaEgreso) || $fechaEgreso->greaterThanOrEqualTo($fechaActual))
                    <tr>
                        <td>
                            @if (!empty($laboral->persona) && !empty($laboral->persona->PrimerNombre) && !empty($laboral->persona->PrimerApellido))
                                {{ $laboral->persona->PrimerNombre }}
                                {{ $laboral->persona->PrimerApellido }}
                            @endif
                        </td>
                        <td>
                            @if (!empty($laboral->persona) && !empty($laboral->persona
                                ->Cedula))
                                {{ $laboral->persona->TipoDocumento}}
                                {{ $laboral->persona->Cedula}}
                            @endif
                        </td>
                        <td>
                            @if (!empty($laboral->detallesCargos) && !empty($laboral
                                ->detallesCargos->TipoCargo))
                                {{ $laboral->detallesCargos->TipoCargo }}
                            @endif
                        </td>
                        <td>
                            @if (!empty($laboral->calculos) && !empty($laboral->calculos
                                ->SueldoMen_Bs))
                                <b>Bs-</b> {{ str_replace(',', '.', number_format($laboral->calculos->SueldoMen_Bs, 
                                2, ',', '.')) }}
                            @endif   
                        </td>
                        <td>
                            @if (!empty($laboral->calculos) && !empty($laboral->calculos
                                ->TotalA))
                                <b>Bs-</b> {{ str_replace(',', '.', number_format($laboral->calculos->TotalA, 
                                2, '.', ',')) }}
                            @endif    
                        </td>
                        <td>
                            @if (!empty($laboral->calculos) && !empty($laboral->calculos
                                    ->TotalD))
                                    <b>Bs-</b> {{ str_replace(',', '.', number_format($laboral->calculos->TotalD, 
                                    2, '.', ',')) }}
                            @endif
                        </td>
                        <td>
                            @if (!empty($laboral->calculos) && !empty($laboral->calculos->TotalAbonar))
                                <b>Bs-</b> {{ str_replace(',', '.', number_format($laboral->calculos->TotalAbonar, 
                                2, '.', ',')) }}
                            @endif
                        </td>
                        <td>
                            <form action="{{ url('#') }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Desea borrar registro?')"
                                    class="btn btn-danger" value="+"> |
                            </form>
                            <form action="{{ url('#') }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Desea borrar registro?')"
                                    class="btn btn-danger" value="-">
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

@endsection

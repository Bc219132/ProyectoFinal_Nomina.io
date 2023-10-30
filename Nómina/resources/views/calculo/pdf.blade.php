<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Reporte de pago</h2>

    <h5>Fecha Actual: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</h5>

    <table class="table table-light">

        <thead class="thed-light">
            <tr>
            <tr></tr>
            <th>Fecha</th>
            <th>Empleado</th>
            <th>Cédula</th>
            <th>Cargo</th>
            <th>Salario Mensual</th>
            <th>Asignación</th>
            <th>Deducción</th>
            <th>Monto a Pagar</th>
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
                            @if (!empty($laboral->calculos) && !empty($laboral->calculos->Año) && !empty($laboral->calculos->Mes) && !empty($laboral->calculos->Periodo))
                                {{ $laboral->calculos->Año }}
                                {{ $laboral->calculos->Mes }}
                                {{ $laboral->calculos->Periodo }}
                            @endif
                        </td>
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
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>
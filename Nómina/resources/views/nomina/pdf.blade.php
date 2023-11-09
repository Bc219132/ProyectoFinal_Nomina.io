<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de pago de nómina</title>

    <h2>Reporte de pago de nómina</h2>

    <h5>Fecha Actual: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</h5>

    <table class="table table-responsive">

        <thead>
            <th>Fecha</th>
            <th>Empleado</th>
            <th>Cédula</th>
            <th>Número de cuenta</th>
            <th>Monto a Pagar</th>S
        </thead>

        <tbody>
            @foreach ($calculos as $calculo)
                @php
                    $laboral = $calculo->datosLaborales;
                    $fechaEgreso = \Carbon\Carbon::parse($laboral->FechaEgreso);
                    $fechaActual = \Carbon\Carbon::now();
                @endphp

                @if (empty($laboral->FechaEgreso) || $fechaEgreso->greaterThanOrEqualTo($fechaActual))
                    <tr style="font-size: 0.65rem">
                        <td>
                            @if (
                                !empty($laboral->calculos) &&
                                    !empty($laboral->calculos->Año) &&
                                    !empty($laboral->calculos->Mes) &&
                                    !empty($laboral->calculos->Periodo))
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
                            @if (!empty($laboral->persona) && !empty($laboral->persona->Cedula))
                                {{ $laboral->persona->TipoDocumento }}
                                {{ $laboral->persona->Cedula }}
                            @endif
                        </td>
                        <td>
                            @if (!empty($laboral->NCuentaBancaria))
                                {{ $laboral->NCuentaBancaria}}
                            @endif
                        </td>

                        <td>
                            @if (!empty($laboral->calculos) && !empty($laboral->calculos->TotalAbonar))
                                <b>Bs-</b>
                                {{ number_format($laboral->calculos->TotalAbonar, 2, ',', '.') }}
                            @endif
                        </td>
                    </tr>
                @endif
            @endforeach
            <tr class="table-active" style="font-size: 0.65rem">
                <td colspan="5">Total:</td>
                <td><span class="fw-bold">Bs- </span>{{ number_format($total['TotalA'], 2, ',', '.') }}</td>
                <td><span class="fw-bold">Bs- </span>{{ number_format($total['TotalD'], 2, ',', '.') }}</td>
                <td><span class="fw-bold">Bs- </span>{{ number_format($total['TotalAbonar'], 2, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<div class="row justify-content-center p-3" style="max-width: 600px">
    <div class="col-12 col-sm-6">
        <label for="TasaActual" class="form-label text-black mt-3">Tasa del Dolar</label>
        <input type="text" class="form-control" aria-label="Tasa del Dolar" id="TasaActual" name="TasaActual" required
             @isset($dolar) value="{{ $dolar->TasaActual }}" @endisset>
    </div>
    <div class="col-12 col-sm-6">
        <label for="FechaActual" class="form-label text-black mt-3">Fecha Actual</label>
        <input type="date" class="form-control" aria-label="Fecha Actual" id="FechaActual" name="FechaActual" required
             @isset($dolar) value="{{ $dolar->FechaActual }}" @endisset>
    </div>
    <div class="col-12">
        <button type="submit" class="d-block btn btn-primary w-100 mt-3 mr-auto">Actualizar</button>
    </div>
</div>
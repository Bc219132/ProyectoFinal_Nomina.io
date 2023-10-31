<div class="row justify-content-center p-3" style="max-width: 600px">
    <div class="col-12 col-sm-6">
        <label for="TasaActual" class="form-label text-black mt-3">Cestaticket</label>
        <input type="text" class="form-control" aria-label="Cestaticket" id="montoCk" name="montoCk" required
             @isset($cesta) value="{{ $cesta->montoCk }}" @endisset>
    </div>
    <div class="col-12">
        <button type="submit" class="d-block btn btn-primary w-100 mt-3 mr-auto">Actualizar</button>
    </div>
</div>
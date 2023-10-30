<div class="row justify-content-center p-3" style="max-width: 600px">   
   <div class="col-12 col-sm-6">
      <label for="TipoContrato" class="form-label text-black mt-3">Tipo de Contrato</label>
         <select class="form-control" id="TipoContrato" name="TipoContrato"
            required @isset($laboral) value="{{ $laboral->TipoContrato }}" @endisset>
            <option selected value="Contratado">Contratado</option>
            <option  value="Fijo">Fijo</option>
         </select>
   </div>
   <div class="col-12 col-sm-6">
      <label for="id_banco" class="form-label text-black mt-3">N° de Cuenta y Banco</label>
        <div class="d-flex">
            <select class="form-control" id="id_banco" name="id_banco" style="width: 6.5rem" required>
               @foreach ($bancos as $banco)
                  <option @selected($loop->index == 0) value="{{ $banco['id'] }}">
                     {{ str_pad($banco['NombreBanco'], 4, '0', STR_PAD_LEFT) }}
                  </option>
               @endforeach
            </select>
            <input type="text" class="form-control" id="NCuentaBancaria" name="NCuentaBancaria" required
            pattern="\d{19,20}" @isset($laboral) value="{{ $laboral->NCuentaBancaria }}" @endisset>
         </div>
   </div>
   <div class="col-12 col-sm-6">
      <label for="TipoCuenta" class="form-label text-black mt-3">Tipo de Cuenta</label>
         <select class="form-control" id="TipoCuenta" name="TipoCuenta"
            required @isset($laboral) value="{{ $laboral->TipoCuenta }}" @endisset>
            <option selected value="Ahorro">Ahorro</option>
            <option value="Corriente">Corriente</option>
         </select>
   </div>
   <div class="col-12 col-sm-6">
      <label for="NivelAcademico" class="form-label text-black mt-3">Nivel Academico</label>
         <select class="form-control" id="NivelAcademico" name="NivelAcademico"
            required @isset($laboral) value="{{ $laboral->NivelAcademico }}" @endisset>
            <option selected value="Básico">Básico</option>
            <option value="Media Superior">Media Superior</option>
            <option value="Superior">Superior</option>
         </select>
   </div>
   <div class="col-12 col-sm-6">
      <label for="id_detalles_cargos" class="form-label text-black mt-3">Genero</label>
      <select class="form-control" id="id_detalles_cargos" name="id_detalles_cargos" required
          @isset($laboral) value="{{ $laboral->id_detalles_cargos }}" @endisset>
          @foreach ($cargos as $cargo)
              <option @selected($loop->index == 0) value="{{ $cargo['id'] }}">{{ $cargo['TipoCargo'] }}</option>
          @endforeach
      </select>  
  </div>
  <div class="col-12 col-sm-6">
      <label for="FechaIngreso" class="form-label text-black mt-3">Fecha de Ingreso</label>
      <input type="date" max="{{ now()->format('Y-m-d') }}" class="form-control" aria-label="FechaIngreso"
         id="FechaIngreso" name="FechaIngreso" required
         @isset($laboral) value="{{ $laboral->FechaIngreso }}" @endisset>
      @error('birthdate')
         <div class="d-block invalid-feedback">{{ $message }}</div>
      @enderror
   </div>

   <div class="col-12 col-sm-6">
      <label for="FechaEgreso" class="form-label text-black mt-3">Fecha de Egreso</label>
      <input type="date" class="form-control" aria-label="FechaEgreso"
         id="FechaEgreso" name="FechaEgreso"
         @isset($laboral) value="{{ $laboral->FechaEgreso }}" @endisset>
   </div>

   <div class="col-12">
      <button type="submit" class="d-block btn btn-primary w-100 mt-3 mr-auto" id="botonGuardar" 
      >Guardar </button>
   </div> 
</div>         
<body>
    <div class="container text-center">
       <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <label for="TipoContrato" style="color: rgba(0, 0, 0, 0.836);"><b>Tipo de Contrato</b></label> &nbsp &nbsp &nbsp
          <select class="form-control" name="TipoContrato" id="TipoContrato" value="{{ isset($laboral->TipoContrato)?$laboral->TipoContrato:'' }}">
            <option value="Fijo">Fijo</option>
            <option value="Contratado">Contratado</option>
         </select>
           &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <label for="id_banco" style="color: rgba(0, 0, 0, 0.836);"><b> N° Cuenta Bancaria </b></label> &nbsp &nbsp &nbsp
          <select name="id_banco" class="form-control" id="id_banco" value="{{ isset($laboral->id_banco)?$laboral->id_banco:'' }}">
             @foreach ($bancos as $banco)
               <option value="{{ str_pad($banco['id'], 4, '0', STR_PAD_LEFT) }}">
                  {{ str_pad($banco['id'], 4, '0', STR_PAD_LEFT) }}
               </option>
             @endforeach
          </select>
          <input type="text" class="form-control" name="NCuentaBancaria" id="NCuentaBancaria" value="{{ isset($laboral->NCuentaBancaria)?$laboral->NCuentaBancaria:'' }}" oninput="formatoNumeroCuenta(this)">
       </div>
          <br><br>
 
       <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
          <label for="TipoCuenta" style="color: rgba(0, 0, 0, 0.836);"><b>Tipo de Cuenta</b></label> &nbsp &nbsp &nbsp &nbsp 
          <select class="form-control" name="TipoCuenta" id="TipoCuenta" value="{{ isset($laboral->TipoCuenta)?$laboral->TipoCuenta:'' }}">
            <option value="Corriente">Corriente</option>
            <option value="Ahorro">Ahorro</option>
         </select>
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="NivelAcademico" style="color: rgba(0, 0, 0, 0.836);"><b>Nivel Academico</b></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
            <select class="form-control" name="NivelAcademico" id="NivelAcademico" value="{{ isset($laboral->NivelAcademico)?$laboral->NivelAcademico:'' }}">
                <option value="Basica">Básico</option>
                <option value="Media Superior">Media Superior</option>
                <option value="Superior">Superior</option>
            </select>
       </div>
       <br><br>
       <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="id_detalles_cargos" style="color: rgba(0, 0, 0, 0.836);"><b> Cargo a Ocupar </b></label> &nbsp &nbsp &nbsp &nbsp 
            <select name="id_detalles_cargos" class="form-control" id="id_detalles_cargos" value="{{ isset($laboral->id_detalles_cargos )?$laboral->id_detalles_cargos:'' }}">
               @foreach ($cargos as $cargo)
                  <option value="{{$cargo['id'] }}">{{ $cargo['TipoCargo']}}</option>
               @endforeach
            </select> 
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        
       <br><br>
       <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="FechaIngreso" style="color: rgba(0, 0, 0, 0.836);"><b>Fecah de Ingreso</b></label> &nbsp &nbsp &nbsp &nbsp 
         <input type="date" class="form-control " name="FechaIngreso" value="{{ isset($laboral->FechaIngreso)?$laboral->FechaIngreso:'' }}" id="FechaIngreso" >
       </div>     
       <br><br>
       <div class="d-grid gap-2 col-30 mx-80"> 
          <br>
          <div>
                <button type="submit" class="btn btn-primary btn-lg" id="botonGuardar" 
                   >Guardar </button>
          </div>
       </div>
    </div>  
       
      <script>
         function formatoNumeroCuenta(input) {
            // Eliminar cualquier guión existente en el valor
            var valorSinGuiones = input.value.replace(/-/g, '');

            // Agregar guiones en el formato deseado
            var valorFormateado = valorSinGuiones.match(/\d{1,5}/g).join('-');

            // Establecer el valor formateado en el campo de entrada en tiempo real
            input.value = valorFormateado;
         }
      </script>
 
 </body>
         
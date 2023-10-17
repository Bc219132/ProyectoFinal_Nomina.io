<body>
   <div class="container text-center">
      <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="PrimerApellido" style="color: rgba(0, 0, 0, 0.836);"><b>Primer Nombre</b></label> &nbsp &nbsp &nbsp &nbsp 
         <input type="text" class="form-control " name="PrimerNombre" value="{{ isset($persona->PrimerNombre)?$persona->PrimerNombre:'' }}" id="PrimerNombre" >
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="PrimerApellido" style="color: rgba(0, 0, 0, 0.836);"><b>Segundo Nombre</b></label> &nbsp &nbsp &nbsp
         <input type="text" class="form-control" name="SegundoNombre" id="SegundoNombre" value="{{ isset($persona->SegundoNombre)?$persona->SegundoNombre:'' }}">
      </div>
         <br><br>

      <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
         <label for="PrimerApellido" style="color: rgba(0, 0, 0, 0.836);"><b>Primer Apellido</b></label> &nbsp &nbsp &nbsp &nbsp
         <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido" value="{{ isset($persona->PrimerApellido)?$persona->PrimerApellido:'' }}">
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="SegundoApellido" style="color: rgba(0, 0, 0, 0.836);"><b>Segundo Apellido</b></label> &nbsp &nbsp &nbsp 
         <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido" value="{{ isset($persona->SegundoApellido)?$persona->SegundoApellido:'' }}">
      </div>
      <br><br>

      <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp 
            <label for="Cedula" style="color: rgba(0, 0, 0, 0.836);"><b> Cédula de Identidad </b></label> &nbsp 
            <select class="form-control" name="TipoDocumento" id="TipoDocumento" value="{{ isset($persona->TipoDocumento)?$persona->TipoDocumento:'' }}">
               <option value="V">V</option>
               <option value="E">E</option>
               <option value="P">P</option>
            </select>
            <input type="text" class="form-control" name="Cedula" id="Cedula" value="{{ isset($persona->Cedula)?$persona->Cedula:'' }}">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <label for="id_generos" style="color: rgba(0, 0, 0, 0.836);"><b> Genero </b></label> &nbsp 
            <select name="id_generos" class="form-control" id="id_generos" value="{{ isset($persona->id_generos)?$persona->id_generos:'' }}">
               @foreach ($generos as $genero)
                <option value="{{$genero['id'] }}">{{ $genero['Tipo_Genero']}}</option>
               @endforeach
            </select>
      </div>    
      <br><br>

      <div class="form-group">&nbsp &nbsp &nbsp &nbsp &nbsp 
            <label for="FechaNacimiento" style="color: rgba(0, 0, 0, 0.836);"> <b>Fecha de Nacimiento </b></label> &nbsp 
            <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" value="{{ isset($persona->FechaNacimiento)?$persona->FechaNacimiento:'' }}">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <p style="color: rgba(0, 0, 0, 0.836);">&nbsp &nbsp  <b>Registro de </b><br>
               <b>Información Fiscal</b></p> &nbsp &nbsp &nbsp
             <input type="text" class="form-control" name="RIF" id="RIF" value="{{ isset($persona->RIF)?$persona->RIF:'' }}">
      </div> 
      <br><br>
      <div class="d-grid gap-2 col-30 mx-80"> 
         <br>
         <div>
               <button type="submit" class="btn btn-primary btn-lg"  
                  >{{$modo }} </button>
         </div>
      </div>
   </div>  
   
      
      <script>
         document.getElementById('botonGuardar').addEventListener('click', function() {
             alert('Guardado exitosamente');
         });
     </script>

</body>
        
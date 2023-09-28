   <div>
      <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="PrimerApellido">Primer Nombre</label> &nbsp &nbsp &nbsp &nbsp 
         <input type="text" class="form-control " name="PrimerNombre" value="{{ isset($persona->PrimerNombre)?$persona->PrimerNombre:'' }}" id="PrimerNombre" >
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="PrimerApellido">Segundo Nombre</label> &nbsp &nbsp &nbsp
         <input type="text" class="form-control" name="SegundoNombre" id="SegundoNombre" value="{{ isset($persona->SegundoNombre)?$persona->SegundoNombre:'' }}">
      </div>
         <br><br>

      <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
         <label for="PrimerApellido">Primer Apellido</label> &nbsp &nbsp &nbsp &nbsp
         <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido" value="{{ isset($persona->PrimerApellido)?$persona->PrimerApellido:'' }}">
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
         <label for="SegundoApellido">Segundo Apellido</label> &nbsp &nbsp &nbsp 
         <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido" value="{{ isset($persona->SegundoApellido)?$persona->SegundoApellido:'' }}">
      </div>
      <br><br>

      <div class="form-group"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
            <label for="Cedula"> Cédula de Identidad </label> &nbsp 
            <input type="text" class="form-control" name="Cedula" id="Cedula" value="{{ isset($persona->Cedula)?$persona->Cedula:'' }}">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             <p>&nbsp &nbsp &nbsp Registro de <br>
              Información Fiscal</p> &nbsp &nbsp &nbsp
            <input type="text" class="form-control" name="RIF" id="RIF" value="{{ isset($persona->RIF)?$persona->RIF:'' }}">
      </div>    
      <br><br>

      <div class="form-group">&nbsp 
            <label for="FechaNacimiento"> Fecha de Nacimiento </label> &nbsp 
            <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" value="{{ isset($persona->FechaNacimiento)?$persona->FechaNacimiento:'' }}">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <label for="Nacionalidad"> Nacionalidad </label> &nbsp 
            <input type="text" class="form-control" name="Nacionalidad" id="Nacionalidad" value="{{ isset($persona->Nacionalidad)?$persona->Nacionalidad:'' }}">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <label for="id_generos"> Genero </label> &nbsp 
            <select name="id_generos" class="form-control" id="id_generos" value="{{ isset($persona->id_generos)?$persona->id_generos:'' }}">
               @foreach ($generos as $genero)
                <option value="{{$genero['id'] }}">{{ $genero['Tipo_Genero']}}</option>
               @endforeach
            </select>
      </div>      
   </div>  
   <body>
   
      <div class="d-grid gap-2 col-30 mx-auto"> 
         <br><br>
         <div>
               <button type="submit" class="btn btn-primary btn-lg"  
                  >{{$modo }} </button>
         </div>
      </div>

</body>
        
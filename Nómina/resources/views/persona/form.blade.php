
            <label for="PrimerNombre">Primer Nombre</label>
            <input type="text" class="form-control" name="PrimerNombre" value="{{ isset($persona->PrimerNombre)?$persona->PrimerNombre:'' }}" id="PrimerNombre" >
            <br>
            <label for="SegundoNombre"> Segundo Nombre </label>
            <input type="text" name="SegundoNombre" id="SegundoNombre" value="{{ isset($persona->SegundoNombre)?$persona->SegundoNombre:'' }}">
            <br>
            <label for="PrimerApellido"> Primer Apellido </label>
            <input type="text" name="PrimerApellido" id="PrimerApellido" value="{{ isset($persona->PrimerApellido)?$persona->PrimerApellido:'' }}">
            <br>
            <label for="SegundoApellido"> Segundo Apellido </label>
            <input type="text" name="SegundoApellido" id="SegundoApellido" value="{{ isset($persona->SegundoApellido)?$persona->SegundoApellido:'' }}">
            <br>
            <label for="Cedula"> Cédula de Identidad </label>
            <input type="text" name="Cedula" id="Cedula" value="{{ isset($persona->Cedula)?$persona->Cedula:'' }}">
            <br>
            <label for="RIF"> Registro de Información Fiscal RIF </label>
            <input type="text" name="RIF" id="RIF" value="{{ isset($persona->RIF)?$persona->RIF:'' }}">
            <br>
            <label for="FechaNacimiento"> Fecha de Nacimiento </label>
            <input type="date" name="FechaNacimiento" id="FechaNacimiento" value="{{ isset($persona->FechaNacimiento)?$persona->FechaNacimiento:'' }}">
            <br>
            <label for="Nacionalidad"> Nacionalidad </label>
            <input type="text" name="Nacionalidad" id="Nacionalidad" value="{{ isset($persona->Nacionalidad)?$persona->Nacionalidad:'' }}">
            <br>
            <label for="id_generos"> Genero </label>
            <input type="text" name="id_generos" id="id_generos" value="{{ isset($persona->id_generos)?$persona->id_generos:'' }}">
            <br>

            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">{{$modo }} datos</button>

        
@extends('Layouts.Panel')

@section('title', 'Registro')

@section('Contenido')

    <form class="mt-4" method="POST" action="">
        @csrf
        
          <p class="text-center fw-bold mx-3 mb-0">Registrar un Usuario</p>


            <!-- Usuario -->

            <input type="text" name="Nombre_Usuario" id="Nombre_Usuario" class="form-control form-control-lg"
                placeholder="Usuario"/>
            <label class="form-label" for="form3Example3">Usuario Registrado</label>

            @error('Nombre_Usuario')
              <p class="border border-red-500 rounded-md bg-red-100 w-full 
              text-red-600 p-2 my-2">* {{ $message }} *</p>
            @enderror

            <!-- Contraseña -->

            <input type="password" name="password" id="password" class="form-control form-control-lg"
                placeholder="Contraseña"/>
            <label class="form-label" for="form3Example4">Contraseña</label>

            @error('password')
              <p class="border border-red-500 rounded-md bg-red-100 w-full 
              text-red-600 p-2 my-2">* {{ $message }} </p>
            @enderror

            <!-- Confir Contraseña -->

            <input type="password" name="password_Confirmation" id="password_Confirmation" class="form-control form-control-lg"
            placeholder="Confirmar Contraseña"/>
            <label class="form-label" for="form3Example4">Confirmar Contraseña</label>

            <!-- Rol-->

            <select name="id_roles" id="id_roles" class="form-control form-control-lg">
                  <option value="1">Administrador</option>
                  <option value="2">Ejecutor</option>
                  <option value="3">Consultor</option>
            </select>
            <label class="form-label" for="form3Example4">Rol para Asiganar</label>
            
            @error('Rol')
              <p class="border border-red-500 rounded-md bg-red-100 w-full 
              text-red-600 p-2 my-2">* {{ $message }} </p>
            @enderror

          <button type="submit" class="btn btn-primary btn-lg"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrar</button>

      </form>


@endsection
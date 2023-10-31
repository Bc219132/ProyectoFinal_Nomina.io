@extends('layouts.Admin')

@section('title', 'Registro')

@section('Contenido')

    <form class="mt-4 mx-auto" method="POST" action="">
        <h2 class="text-center fw-bold mx-3 mb-0">Registrar un Usuario</h2>
        @csrf
        <div class="row justify-content-center p-3" style="max-width: 600px">
            <div class="col-12 col-sm-6">
                <label for="Nombre_Usuario" class="form-label text-black mt-3">Usuario Registrado</label>
                <input type="text" class="form-control" aria-label="Nombre de Usuario" id="Nombre_Usuario"
                    name="Nombre_Usuario" required pattern="[a-zA-Z]+">
                @error('Nombre_Usuario')
                    <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-sm-6">
                <label for="email" class="form-label text-black mt-3">Correo</label>
                <input type="email" class="form-control" aria-label="Correo" id="email" name="email" required>
                @error('email')
                    <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-sm-6">
                <label for="password" class="form-label text-black mt-3">Contraseña</label>
                <input type="password" class="form-control" aria-label="Password" id="password" name="password" required>
                @error('password')
                    <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 col-sm-6">
                <label for="genre" class="form-label text-black mt-3">Rol a Asignar</label>
                <select class="form-control" id="id_roles" name="id_roles" required>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol['id'] }}">{{ $rol['Tipo_Rol'] }}</option>
                    @endforeach
                </select>
                @error('Roles')
                    <div class="d-block invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="d-block btn btn-primary w-100 mt-3 mr-auto">Registrar</button>
            </div>
        </div>
    </form>


@endsection

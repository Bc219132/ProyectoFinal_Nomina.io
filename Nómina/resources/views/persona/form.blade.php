<div class="row justify-content-center p-3" style="max-width: 600px">
    <div class="col-12 col-sm-6">
        <label for="firstName" class="form-label text-black mt-3">Primer nombre</label>
        <input type="text" class="form-control" aria-label="Primer nombre" id="firstName" name="firstName" required
            pattern="[a-zA-Z]+">
        @error('firstName')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="secondName" class="form-label text-black mt-3">Segundo nombre</label>
        <input type="text" class="form-control" aria-label="Segundo nombre" id="secondName" name="secondName"
            required pattern="[a-zA-Z]+">
        @error('secondName')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="lastName" class="form-label text-black mt-3">Primer apellido</label>
        <input type="text" class="form-control" aria-label="Primer apellido" id="lastName" name="lastName" required
            pattern="[a-zA-Z]+">
        @error('lastName')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="secondLastName" class="form-label text-black mt-3">Segundo apellido</label>
        <input type="text" class="form-control" aria-label="Segundo apellido" id="secondLastName"
            name="secondLastName" required pattern="[a-zA-Z]+">
        @error('secondLastName')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="identification" class="form-label text-black mt-3">Cédula de Identidad</label>
        <div class="d-flex">
            <select class="form-control" id="identificationType" name="identificationType" style="width: 3rem" required>
                <option selected value="V">V</option>
                <option value="E">E</option>
                <option value="P">P</option>
            </select>
            <input type="text" class="form-control" id="identification" name="identification" required
                pattern="\d{7,}">
        </div>
        @error('identificationType')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
        @error('identification')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="genre" class="form-label text-black mt-3">Genero</label>
        <select class="form-control" id="genre" name="genre" required>
            @foreach ($generos as $genero)
                <option @selected($loop->index == 0) value="{{ $genero['id'] }}">{{ $genero['Tipo_Genero'] }}</option>
            @endforeach
        </select>
        @error('genre')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="birthdate" class="form-label text-black mt-3">Fecha de nacimiento</label>
        <input type="date" max="{{ now()->format('Y-m-d') }}" class="form-control" aria-label="Primer apellido"
            id="birthdate" name="birthdate" required>
        @error('birthdate')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12 col-sm-6">
        <label for="rif" class="form-label text-black mt-3">Registro de Información Fiscal</label>
        <input type="text" class="form-control" aria-label="RIF" id="rif" name="rif" required
            pattern="\d{7,}">
        @error('rif')
            <div class="d-block invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <button type="submit" class="d-block btn btn-primary w-100 mt-3 mr-auto">{{ $modo }} </button>
    </div>
</div>

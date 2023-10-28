<!doctype html>
<html lang="en">

<head>
    <title>Olvido Contraseña</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/Style_Login.css') }}">
</head>

<body>
    <main class="container vh-100 p-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Login image">
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Sistema de Nómina</h1>
                @if (Session::has('status'))
                    <div class="d-block invalid-feedback mb-4 text-green">
                        {{ Session::get('status') }}
                    </div>
                @endif

                <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Olvido Contraseña</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            aria-describedby="correo" placeholder="john@doe.com">
                    </div>
                    @error('correo')
                        <div class="d-block invalid-feedback mb-4">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('status')
                        <div class="d-block invalid-feedback mb-4">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('login.index') }}">Login</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Enviar enlace</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>

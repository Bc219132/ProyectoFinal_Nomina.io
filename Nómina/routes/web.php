<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsulController;
use App\Http\Controllers\EjecController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\LaboralesController;
use App\Http\Controllers\BancoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\GerenciaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\Calculo_adController;
use App\Http\Controllers\DolarController;
use App\Http\Controllers\CestaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->middleware('auth');


/*REGISTRO*/

Route::get('/Registro', [RegistroController::class, 'create'])
    ->middleware('auth')
    ->name('Registro.index');
Route::post('/Registro', [RegistroController::class, 'store'])
    ->name('Registro.Store');


/*INICIO DE SESION*/

Route::get('/login', [SesionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login', [SesionController::class, 'store'])
    ->name('login.store');

/*CERRAR SESION*/

Route::get('/logout', [SesionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

/*INICIO DE SESION ADMINITRADOR*/

Route::get('/Admin', [AdminController::class, 'index'])
    ->middleware('auth.Admin')
    ->name('Admin.index');

/*INICIO DE SESION CONSULTOR*/

Route::get('/Consul', [ConsulController::class, 'index'])
    ->middleware('auth')
    ->name('Consul.index');

/*INICIO DE SESION EJECUTOR*/

Route::get('/Ejec', [EjecController::class, 'index'])
    ->middleware('auth')
    ->name('Ejec.index');

Route::resource('user', RegistroController::class)
    ->middleware('auth.Conjun');
/******VISTA CRUP ADMINISTRATIVO & EJECUTOR******/

Route::resource('persona', PersonaController::class)
    ->middleware('auth.Conjun');

Route::get('laborales', [LaboralesController::class, 'index'])
    ->middleware('auth.Conjun');
Route::resource('persona.laboral', LaboralesController::class)
    ->shallow()
    ->middleware('auth.Conjun');

/******VISTA CRUP GENERO||BANCO||GERENCIA||CARGO||DOLAR||CESTA******/

Route::resource('genero', GeneroController::class)
    ->middleware('auth.Conjun');
Route::resource('banco', BancoController::class)
    ->middleware('auth.Conjun');
Route::resource('gerencia', GerenciaController::class)
    ->middleware('auth.Conjun');
Route::resource('cargo', CargoController::class)
    ->middleware('auth.Conjun');
Route::resource('dolar', DolarController::class)
    ->middleware('auth.Conjun');
    Route::resource('cesta', CestaController::class)
    ->middleware('auth.Conjun');

/******CALCULOS DE SALARIOS Y CESTA******/
Route::post('calculo/handler', [Calculo_adController::class, 'handler'])
    ->middleware('auth.Conjun')
    ->name('calculo.handler');
Route::get('calculo/prepayroll', [Calculo_adController::class, 'destroyPrepayroll'])
    ->middleware('auth.Conjun')
    ->name('calculo.destroy.prepayroll');
Route::resource('calculo', Calculo_adController::class)
    ->except('show')
    ->middleware('auth.Conjun');

/******PDF VISTA CALCULOADS******/
Route::get('generar/pdf', [Calculo_adController::class, 'pdf'])
    ->name('generar.pdf');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['correo' => 'required|email']);

    $status = Password::sendResetLink(
        ['email' => $request->input('correo')]
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['correo' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'correo' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $data = $request->only('password', 'password_confirmation', 'token');
    $data['email'] = $request->input('correo');

    $status = Password::reset(
        $data,
        function ($user, $password) {
            $user->forceFill([
                'password' => $password
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login.index')->with('status', __($status))
        : back()->withErrors(['correo' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::get('backup', function () {
    $success = Artisan::call('backup:run --only-db');
    if (!$success) {
        return back()->with('message', 'Backup exitoso.');
    } else {
        return back()->with('message', 'Backup fallido.');
    }
})
    ->name('backup');

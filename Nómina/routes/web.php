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
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\Calculo_adController;
use App\Http\Controllers\DeduccionController;
use App\Http\Controllers\DolarController;

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

/******VISTA CRUP GENERO||BANCO||GERENCIA||CARGO||DOLAR******/

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

/******CALCULOS DE SALARIOS Y CESTA******/
Route::resource('calculo', Calculo_adController::class)
    ->middleware('auth.Conjun');


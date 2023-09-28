<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsulController;
use App\Http\Controllers\EjecController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\LaboralesController;

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
    return view('Registro');
})->middleware('auth');


/*REGISTRO*/

Route::get('/Registro', [RegistroController::class,'create']) 
    ->middleware('auth')
    ->name('Registro.index');
Route::post('/Registro', [RegistroController::class,'store']) 
    ->name('Registro.Store');


/*INICIO DE SESION*/

Route::get('/Login', [SesionController::class,'create']) 
    ->middleware('guest')    
    ->name('Login.index');
Route::post('/Login', [SesionController::class,'store']) 
    ->name('Login.Store');

/*CERRAR SESION*/

Route::get('/Logout', [SesionController::class,'destroy']) 
    ->middleware('auth')   
    ->name('Login.destroy');

/*INICIO DE SESION ADMINITRADOR*/

Route::get('/Admin', [AdminController::class, 'index'])
    ->middleware('auth.Admin')  
    ->name('Admin.index');

/*INICIO DE SESION CONSULTOR*/

Route::get('/Consul', [ConsulController::class, 'index'])
    ->middleware('auth.Consul')  
    ->name('Consul.index');

/*INICIO DE SESION EJECUTOR*/

Route::get('/Ejec', [EjecController::class, 'index'])
    ->middleware('auth.Ejec')  
    ->name('Ejec.index');

Route::resource('user',RegistroController::class);

    /******VISTA CRUPN ADMINISTRATIVO******/

Route::resource('persona',PersonaController::class);
Route::resource('laborales',LaboralesController::class);







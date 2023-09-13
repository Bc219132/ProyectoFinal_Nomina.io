<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;

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
    return view('principal');
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



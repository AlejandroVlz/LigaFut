<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\EquiposPrimeraController;
use  App\Http\Controllers\EquiposSegundaController;
use  App\Http\Controllers\ResultadosPrimeraController;
use  App\Http\Controllers\ResultadosSegundaController;
use  App\Http\Controllers\NoticiasController;
use  App\Http\Controllers\LoginController;
use  App\Http\Controllers\CrearCuentaController;
use  App\Http\Controllers\ContactoController;









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
    return view('home');
});



Route::get('/', [HomeController::class, '__invoke'])->name('Inicio');

Route::get('/Noticias', [NoticiasController::class, '__invoke'])->name('Noticias');


Route::get('/EquiposPrimera', [EquiposPrimeraController::class, 'index'])->name('Equipos.primera');
Route::get('/EquiposSegunda', [EquiposSegundaController::class, 'index'])->name('Equipos.segunda');

Route::get('/ResultadosPrimera', [ResultadosPrimeraController::class, 'index'])->name('Resultados.primera');
Route::get('/ResultadosSegunda', [ResultadosSegundaController::class, 'index'])->name('Resultados.segunda');


Route::get('/Login', [LoginController::class, 'index'])->name('Login');
Route::get('/CrearCuenta', [CrearCuentaController::class, 'index'])->name('Crear.Cuenta');

Route::get('/Contacto', [ContactoController::class, 'index'])->name('Contacto');






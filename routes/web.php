<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home ');
    })->name('home');
});

Auth::routes();

//Vehiculos
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class);
//Viajes
Route::resource('viajes', App\Http\Controllers\ViajeController::class);
//Facturas Gastos
Route::resource('facturas-gastos', App\Http\Controllers\FacturasGastoController::class);
//Conductores
Route::resource('conductores', App\Http\Controllers\ConductoreController::class);
//Mantenimientos
Route::resource('mantenimientos', App\Http\Controllers\MantenimientoController::class);
//Notificaciones
Route::resource('notificaciones', App\Http\Controllers\NotificacioneController::class);
//Piezas
Route::resource('piezas', App\Http\Controllers\PiezaController::class);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

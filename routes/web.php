<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\clientes;
 */

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');

Route::get('/planes', [\App\Http\Controllers\PlanesController::class, 'index'])->name('planes');
Route::get('/reportes', [\App\Http\Controllers\ReportesController::class, 'index'])->name('reportes');
Route::get('/servicioTecnico', [\App\Http\Controllers\ServiciosController::class, 'index'])->name('servicioTecnico');
Route::get('/tecnicos', [\App\Http\Controllers\TecnicosController::class, 'index'])->name('tecnicos');

/* Route::resource('/clientes', clientes::class);
 */
Auth::routes(); 



/* Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */

<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\clientes;
 */

Route::get('/', function () {
    return view('home');
});
/* Route::get('/planes', [\App\Http\Controllers\planes::class, 'index'])->name('planes');
Route::get('/reportes', [\App\Http\Controllers\reportes::class, 'index'])->name('reportes');
Route::get('/servicioTecnico', [\App\Http\Controllers\servicioTecnico::class, 'index'])->name('servicioTecnico');
Route::get('/tecnicos', [\App\Http\Controllers\tecnicos::class, 'index'])->name('tecnicos');

Route::resource('/clientes', clientes::class);
 */
Auth::routes(); 



/* Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */

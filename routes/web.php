<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/clientes', [\App\Http\Controllers\clientes::class, 'index'])->name('clientes');
Route::get('/planes', [\App\Http\Controllers\planes::class, 'index'])->name('planes');
Route::get('/reportes', [\App\Http\Controllers\reportes::class, 'index'])->name('reportes');
Route::get('/servicioTecnico', [\App\Http\Controllers\servicioTecnico::class, 'index'])->name('servicioTecnico');
Route::get('/tecnicos', [\App\Http\Controllers\tecnicos::class, 'index'])->name('tecnicos');


/* Auth::routes(); */



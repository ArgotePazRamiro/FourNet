<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientes;


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
Route::get('/planes', [\App\Http\Controllers\planes::class, 'index'])->name('planes');
Route::get('/reportes', [\App\Http\Controllers\reportes::class, 'index'])->name('reportes');
Route::get('/servicioTecnico', [\App\Http\Controllers\servicioTecnico::class, 'index'])->name('servicioTecnico');
Route::get('/tecnicos', [\App\Http\Controllers\tecnicos::class, 'index'])->name('tecnicos');

Route::resource('/clientes', clientes::class);

Auth::routes(); 

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


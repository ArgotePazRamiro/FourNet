<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TecnicosController;

 

/* Auth::routes(); */

Route::get('/', function () {
    return view('home');
})->name('home');

/* Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
Route::get('/planes', [\App\Http\Controllers\PlanesController::class, 'index'])->name('planes'); */

Route::get('/reportes', [\App\Http\Controllers\ReportesController::class, 'index'])->name('reportes');
Route::get('/servicioTecnico', [\App\Http\Controllers\ServiciosController::class, 'index'])->name('servicioTecnico');
/* Route::get('/tecnicos', [\App\Http\Controllers\TecnicosController::class, 'index'])->name('tecnicos');
 */
Route::resource('/planes', PlanesController::class);
Route::resource('/clientes', ClientesController::class);
Route::resource('/tecnicos', TecnicosController::class);


/* Route::get('/planes', [\App\Http\Controllers\PlanesController::class, 'index'])->name('planes.index');
Route::get('/planes/create', [\App\Http\Controllers\PlanesController::class, 'create'])->name('planes.create');
Route::post('/planes', [\App\Http\Controllers\PlanesController::class, 'store'])->name('planes.store');
Route::get('/planes/{planes}/edit', [\App\Http\Controllers\PlanesController::class, 'edit'])->name('planes.edit');
Route::patch('/planes/{planes}', [\App\Http\Controllers\PlanesController::class, 'update'])->name('planes.update');
Route::delete('/planes/{planes}', [\App\Http\Controllers\PlanesController::class, 'destroy'])->name('planes.destroy');

 */





/* Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */

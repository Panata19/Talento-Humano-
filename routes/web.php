<?php

use App\Http\Controllers\dependenciasTH\CargoController;
use App\Http\Controllers\dependenciasTH\DepartamentoController;
use App\Http\Controllers\dependenciasTH\RegimenController;
use App\Http\Controllers\dependenciasTH\TiposRegimenController;
use App\Http\Controllers\dependenciasTH\ServicioController;
use App\Http\Controllers\Trabajador\InformacinLaboralController;
use App\Http\Controllers\Trabajador\TrabajadorController;
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
    return view('welcome');
});

Route::get('/plantilla', function () {
    return view('layout.admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('cargo', CargoController::class);
Route::resource('departamento', DepartamentoController::class);
Route::resource('regimen', RegimenController::class);
Route::resource('tiposRegimen', TiposRegimenController::class);
Route::resource('informacionLaboral', InformacinLaboralController::class);
Route::resource('trabajador', TrabajadorController::class);
Route::resource('servicio', ServicioController::class);

require __DIR__.'/auth.php';

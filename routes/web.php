<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConceptoController;

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

Route::post('/prueba', [App\Http\Controllers\ConceptoController::class, 'index']);
Route::get('/', [App\Http\Controllers\ConceptoController::class, 'captura'])->name('home');
Route::get('/captura/vista', [App\Http\Controllers\ConceptoController::class, 'listar'])->name('captura.vista');
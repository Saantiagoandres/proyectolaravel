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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('registros', [CursoController::class, 'index'])->name('registros.index');
Route::post('registros', [CursoController::class, 'store'])->name('registros.store');
Route::get('registros/create', [CursoController::class, 'create']);
Route::delete('registro/{registro}', [CursoController::class, 'destroy'])->name('registro.destroy');
Route::get('registros/{registro}', [CursoController::class, 'show'])->name('registro.show');

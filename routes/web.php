<?php

use App\Http\Controllers\GestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VotoController;
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

Route::get('/', HomeController::class);

Route::get('gestiones', [GestionController::class, 'index'])->name('gestiones.index');

Route::get('gestiones/create', [GestionController::class, 'create'])->name('gestiones.create');

Route::get('gestiones/show', [GestionController::class, 'show'])->name('gestiones.show');



Route::get('votos', [VotoController::class, 'index'])->name('votos.index');

Route::get('votos/create', [VotoController::class, 'create'])->name('votos.create');

Route::get('votos/show', [VotoController::class, 'show'])->name('votos.show');

// Route::get('paneles', function () {
//     Return "Panel de Control";
// });

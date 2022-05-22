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
    return view('bienvenido');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//   Rutas del usuario
Route::get('users',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
Route::get('users/{user}',[App\Http\Controllers\UserController::class,'show'])->name('users.show');
//    Rutas de cuentos
Route::get('/cuentos/create',[App\Http\Controllers\CuentoController::class,'create'])->name('cuentos.create');
Route::post('/cuentos',[App\Http\Controllers\CuentoController::class,'store'])->name('cuentos.store');
Route::get('cuentos',[App\Http\Controllers\CuentoController::class,'index'])->name('cuentos.index');
//    Rutas de videos
Route::get('/videos/create',[App\Http\Controllers\VideoController::class,'create'])->name('videos.create');
Route::post('/videos',[App\Http\Controllers\VideoController::class,'store'])->name('videos.store');
Route::get('videos',[App\Http\Controllers\VideoController::class,'index'])->name('videos.index');
//    Juegos
Route::get('juegos',[App\Http\Controllers\JuegoController::class,'index'])->name('juegos.index');
Route::get('juegos/show',[App\Http\Controllers\JuegoController::class,'show'])->name('juegos.show');


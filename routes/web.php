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

Route::get('users',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
Route::get('users/{user}',[App\Http\Controllers\UserController::class,'show'])->name('users.show');

Route::get('/cuentos/create',[App\Http\Controllers\CuentoController::class,'create']);
Route::post('/cuentos',[App\Http\Controllers\CuentoController::class,'store'])->name('cuentos.store');
Route::get('cuentos',[App\Http\Controllers\CuentoController::class,'index'])->name('cuentos.index');

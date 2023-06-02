<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProovedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecepcionController;
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

Route::get('/', function () {
    return view('auth/login');
});




Route::resource('recepcion', RecepcionController::class)->middleware('auth');


Route::resource('proovedores', ProovedorController::class)->middleware('auth');

Route::resource('productos', ProductoController::class)->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

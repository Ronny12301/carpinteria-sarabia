<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MuebleController;
use App\Http\Controllers\VentaController;
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


Route::get('/', HomeController::class)->name('home');

// Auth
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'create'])->name('register');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'attemptLogin'])->name('signin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('contacto', fn() => view('contacto'))->name('contacto');


// Controllers
Route::resource('muebles', MuebleController::class);
Route::resource('ventas', VentaController::class)->middleware('auth');
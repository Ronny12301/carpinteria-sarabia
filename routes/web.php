<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuebleController;
use App\Http\Controllers\UsuarioController;

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
Route::get('reset-password/{usuario}/{timestamp}', [AuthController::class, 'resetPassword'])->name('reset-password')->middleware('guest');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password')->middleware('guest');
Route::post('update-password/{usuario}', [AuthController::class, 'updatePassword'])->name('update-password');
Route::post('send-mail', [AuthController::class, 'sendMail'])->name('send-mail');

Route::get('contacto', fn() => view('contacto'))->name('contacto');
Route::get('mail', fn() => view('emails.reset-password-mail'))->name('mail');


// Controllers
Route::resource('usuarios', UsuarioController::class)->except(['store'])->middleware('auth');
Route::resource('muebles', MuebleController::class);

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

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
    return view('Auth.login');
});


// Route::fallback(function () {
//     return view('Auth.register');
// });


Auth::routes();





Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('registro');

Route::post('/login-acceso', [LoginController::class, 'login_acceso'])->name('login-acceso');

Route::post('/login_registro', [RegisterController::class, 'register_create'])->name('login_registro');



Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');





// Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::post('/login-acceso', [LoginController::class, 'login_acceso'])->name('login-acceso');


// Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('registro');

// Route::post('/login_registro', [RegisterController::class, 'register_create'])->name('login_registro');

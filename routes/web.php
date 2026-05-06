<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::view('/', 'vistas.login')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});



Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

require __DIR__.'/settings.php';

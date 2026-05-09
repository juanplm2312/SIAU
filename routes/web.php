<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::view('/', 'vistas.login')->name('home');
Route::get('/registro', function () { return view('vistas.registro'); })->name('registro');
Route::view('/menu', 'vistas.menu')->name('menu');
Route::view('/alumnos', 'alumno.alumnos')->name('alumnos');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

    

Route::post('/registro', [RegisterController::class, 'registro'])->name('registro');
Route::post('/login', [AuthController::class, 'login'])->name('login');



require __DIR__.'/settings.php';

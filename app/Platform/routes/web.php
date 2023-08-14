<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{
    AuthController,
    HomeController,
};

Route::middleware('auth')->get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->prefix('auth')->group(function() {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::get('login', [AuthController::class, 'login'])->name('postlogin');
    Route::get('registar', [AuthController::class, 'registar'])->name('registar');
    Route::post('registar', [AuthController::class, 'store'])->name('post.registar');
});
Route::get('login', [AuthController::class, 'index'])->name('entrar');
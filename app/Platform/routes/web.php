<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{
    AuthController,
    HomeController,
    PerfilController,
    PostController,
};

Route::middleware(['auth'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('post')->group(function() {
        Route::post('add', [PostController::class, 'store'])->name('post.add');
        Route::post('add/{id}', [PostController::class, 'post'])->name('post.add.img');
        Route::post('audio/add', [PostController::class, 'postAudio'])->name('post.add.audio');
    });

    Route::prefix('perfil')->group(function() {
        Route::get('', [PerfilController::class, 'index'])->name('perfil');
        Route::post('upload/{id}', [PerfilController::class, 'uploadImg'])->name('perfil.upload');
        Route::post('upload/foto/{id}', [PerfilController::class, 'uploadFoto'])->name('perfil.upload.foto');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->prefix('auth')->group(function() {
    Route::get('entrar', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('post.login');
    Route::get('cadastrar', [AuthController::class, 'registar'])->name('registar');
    Route::post('registar', [AuthController::class, 'store'])->name('post.registar');
});

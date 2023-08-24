<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{
    AuthController,
    HomeController,
    PerfilController,
    PostController,
    MusicaController,
    PodcastController,
    GrupoController,
    NotificacaoController,
};

Route::middleware(['auth'])->group(function() {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/feed', [HomeController::class, 'index'])->name('index');

    Route::prefix('post')->group(function() {
        Route::post('add', [PostController::class, 'store'])->name('post.add');
        Route::post('add/{id}', [PostController::class, 'post'])->name('post.add.img');
        Route::post('audio/add', [PostController::class, 'postAudio'])->name('post.add.audio');
    });

    Route::prefix('musicas')->group(function() {
        Route::get('', [MusicaController::class, 'index'])->name('perfil');
        Route::post('add', [MusicaController::class, 'store'])->name('musica.add');
    });
    
    Route::prefix('podcasts')->group(function() {
        Route::get('', [PodcastController::class, 'index'])->name('podcasts');
        Route::post('add', [PodcastController::class, 'store'])->name('podcast.add');
    });

    Route::prefix('notificacao')->group(function() {
        Route::get('get', [NotificacaoController::class, 'getNotificacoesUsuarioAtual']);
    });

    Route::prefix('grupos')->group(function() {
        Route::get('', [GrupoController::class, 'index'])->name('grupos');
        Route::post('add', [GrupoController::class, 'store'])->name('grupo.add');
        Route::post('sair/{grupo_id}', [GrupoController::class, 'sair'])->name('grupo.sair');
        Route::post('aderir/{id}/{grupo_id}', [GrupoController::class, 'join'])->name('grupo.join');
        Route::post('cancelar/{id}/{grupo_id}', [GrupoController::class, 'cancelarJoin'])->name('grupo.cancelarJoin');
    });

    Route::prefix('perfil')->group(function() {
        Route::get('', [PerfilController::class, 'index'])->name('perfil');
        Route::post('upload/{id}', [PerfilController::class, 'uploadImg'])->name('perfil.upload');
        Route::post('upload/foto/{id}', [PerfilController::class, 'uploadFoto'])->name('perfil.upload.foto');
        Route::get('{username}', [PerfilController::class, 'viewProfile'])->name('perfil.ver');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->prefix('auth')->group(function() {
    Route::get('entrar', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('post.login');
    Route::get('cadastrar', [AuthController::class, 'registar'])->name('registar');
    Route::post('registar', [AuthController::class, 'store'])->name('post.registar');
});

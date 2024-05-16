<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ColaboraController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PrivacidadController;
use App\Http\Controllers\InformateController;
use Illuminate\Support\Facades\Route;

// Rutas para autenticación social
Route::get('/auth/{provider}/redirect', [SocialController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'callback']);

// Rutas para páginas estáticas
Route::view('/', 'front-client.home');
Route::view('/somos', 'front-client.somos');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/category/{category}', 'category')->name('posts.category');
    Route::get('/tag/{tag}', 'tag')->name('posts.tag');
});
// Ruta de Dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

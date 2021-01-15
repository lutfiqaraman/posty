<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/dashboard', [DashboardController::class, 'Index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'Store'])->name('logout');

Route::get('/login', [LoginController::class, 'Index'])->name('login');
Route::post('/login', [LoginController::class, 'Store']);

Route::get('/register', [RegisterController::class, 'Index'])->name('register');
Route::post('/register', [RegisterController::class, 'Store']);

Route::get('/posts', [PostController::class, 'Index'])->name('posts');
Route::post('/posts', [PostController::class, 'Store']);
Route::delete('/posts/{post}', [PostController::class, 'Destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'Store'])->name('posts.likes');

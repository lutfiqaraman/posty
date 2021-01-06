<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/register', [RegisterController::class, 'Index'])->name('register');
Route::post('/register', [RegisterController::class, 'Store']);

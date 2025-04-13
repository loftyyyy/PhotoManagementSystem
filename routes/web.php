<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('/');

    Route::get('/database', function () {
        return view('database');
    })->name('database');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/', [AuthController::class, 'login'])->name('user.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');


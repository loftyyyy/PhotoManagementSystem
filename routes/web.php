<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/database', function () {
    return view('database');
})->name('database');

Route::get('/login', function () {
    return view('login');

})->name('login');


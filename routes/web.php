<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");
Route::get('acceso', function () {
    return view('login');
})->name('login');
Route::get('registro', function () {
    return view('register');
})->name("register");

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name("home");
Route::get('acceso', function () { return view('login'); })->name('login');
Route::post('acceso', [AuthController::class,'login'])->name("auth.login");
Route::get('cerrar-sesion', [AuthController::class,'logout'])->name('logout.user');
Route::get('registro', function () { return view('register'); })->name("register");
Route::post('registro', [AuthController::class,'register'])->name("auth.register");
Route::get('reestablecer', function () { return view('resetPassword'); })->name("resetPassword");
Route::get('auth/google', [AuthController::class,'redirectGoogle'])->name("redirect.google");
Route::get('auth/google/callback', [AuthController::class,'handleGoogleCallback']);

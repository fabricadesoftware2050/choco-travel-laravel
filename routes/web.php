<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name("home");
Route::get('acceso', function () { return view('login'); })->name('login');
Route::post('acceso', [AuthController::class,'login'])->name("auth.login");
Route::get('cerrar-sesion', [AuthController::class,'logout'])->name('logout.user');
Route::get('registro', function () { return view('register'); })->name("register");
Route::post('registro', [AuthController::class,'register'])->name("auth.register");
Route::get('reestablecer', function () { return view('auth.password-reset'); })->name("resetPassword");
Route::get('cambiar-contrasena', [AuthController::class,'changePasswordForm'])->name("reset.password");
Route::post('change-password', [AuthController::class,'changePassword'])->name("change.password");
Route::get('auth/google', [AuthController::class,'redirectGoogle'])->name("redirect.google");
Route::get('auth/google/callback', [AuthController::class,'handleGoogleCallback']);

Route::post('/reset-password', [AuthController::class, 'sendEmailResetPassword'])->name('password.email');
Route::middleware('auth')->group(function () {
    Route::get('/resend-verification', [AuthController::class, 'resendEmailVerifyAccount'])->name('resend.verification');
    Route::get('/verify', [AuthController::class, 'verifyAccount'])->name('verify.account');
});


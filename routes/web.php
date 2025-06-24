<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");
Route::get("inicio-sesion",[AuthController::class,'index'])->name('login');

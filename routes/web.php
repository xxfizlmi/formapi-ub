<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [Auth::class,'login'])->name('login');
Route::post('/login', [Auth::class,'proseslogin'])->name('proseslogin');
Route::get('/register', [Auth::class,'register'])->name('register');
Route::get('/forgot-password', [Auth::class,'forgotPassowrd'])->name('forgot-password');
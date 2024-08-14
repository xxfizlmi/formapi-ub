<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [Auth::class,'login'])->name('login');;
Route::post('/login', [Auth::class,'proseslogin'])->name('proseslogin');

Route::get('/register', [Auth::class,'register'])->name('register');
Route::post('/register', [Auth::class,'prosesRegister'])->name('prosesRegister');

Route::get('/forgot-password', [Auth::class,'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password', [Auth::class,'prosesForgotPassword'])->name('prosesForgotPassword');

Route::get('/new-password', [Auth::class,'newPassword'])->name('new-password');
Route::post('/new-password', [Auth::class,'prosesNewPassword'])->name('prosesNewPassword');
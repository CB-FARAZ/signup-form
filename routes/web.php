<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


// Welcome route
Route::get('/', function () {
    return view('welcome');
});


// Login route
Route::get('/login', [LoginController::class, 'index']);

// Login authentication route
Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process');

// Home page route
Route::get('/home', [HomeController::class, 'index'])->name('home.index');


//Register User

Route::get('/register', [RegisterController::class, 'index']);


//Register authentication User

Route::post('/register/process', [RegisterController::class, 'register'])->name('register.process');


//logout

Route::post('/logout', [logoutController::class , 'logout'])->name('logout');





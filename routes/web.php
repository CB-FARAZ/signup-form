<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


 //Welcome route

Route::get('/', fn(Request $request) => view('welcome'));

//Dashboard Route

Route::get('view' , fn() => view('view'))->name('main');

// Login route

Route::get('/login', [LoginController::class, 'index']);

// Login authentication route

Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process');

//Register User

Route::get('/register', [RegisterController::class, 'index']);

//Register authentication User

Route::post('/register/process', [RegisterController::class, 'register'])->name('register.process');

//logout

Route::post('/logout', [logoutController::class , 'logout'])->name('logout');












































//Route::group(['middleware' => 'auth'] , function (){
//
//    Route::group([
//        'middleware' => 'user',
//        'prefix' => 'user',
//        'namespace' => 'user',
//        'as' => 'user'
//
//    ] , function () {
//
//        Route::resource('users', 'loginController');
//        Route::resource('projects', 'RegisterController');
//
//
//    });
//
//    Route::group([
//
//        'middleware' => 'admin',
//        'prefix' => 'admin',
//        'namespace' => 'admin',
//        'as' => 'admin'
//
//    });
//
//
//
//});


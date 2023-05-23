<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


// Welcome route
Route::get('/', fn(Request $request) => view('welcome'));


// Login route
Route::get('/login', [LoginController::class, 'index']);

// Login authentication route
Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process');

// Home page route
Route::get('/home', [HomeController::class, 'index'])->name('home.laravel')->middleware(\App\Http\Middleware\AuthenticateMiddleware::class);




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


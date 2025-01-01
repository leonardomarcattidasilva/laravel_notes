<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function(){
    Route::middleware(CheckIsNotLogged::class)->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::post('/loginSubmit', 'loginSubmit');
    });
    Route::get('/logout', 'logout')->name('logout')->middleware(CheckIsLogged::class);
});

Route::controller(MainController::class) ->group(function(){
    Route::middleware(CheckIsLogged::class)->group(function(){
        Route::get('/', 'index')->name('home');
        Route::get('/newNote', 'newNote')->name('newNote');
    });
});

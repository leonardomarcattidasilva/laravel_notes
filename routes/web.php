<?php

// use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'login');
    Route::get('/logout', 'logout');
    Route::post('/loginSubmit', 'loginSubmit');
});

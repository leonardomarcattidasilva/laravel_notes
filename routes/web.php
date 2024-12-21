<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return 'ok';
});

Route::get('main', [MainController::class, 'index']);

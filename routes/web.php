<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::middleware(CheckIsNotLogged::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/loginSubmit', 'loginSubmit')->name('loginSubmit');
    });
    Route::get('/logout', 'logout')->name('logout')->middleware(CheckIsLogged::class);
});

Route::controller(MainController::class)->group(function () {
    Route::middleware(CheckIsLogged::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/newNote', 'newNote')->name('newNote');
        Route::post('/newNoteSubmit', 'newNoteSubmit')->name('newNoteSubmit');
        Route::get('editNote/{id}', 'editNote')->name('editNote');
        Route::post('editNoteSubmit', 'editNoteSubmit')->name('editNoteSubmit');
        Route::get('confirmDeleteNote/{id}', 'confirmDeleteNote')->name('confirmDeleteNote');
        Route::get('deleteNote/{id}', 'deleteNote')->name('deleteNote');
    });
});

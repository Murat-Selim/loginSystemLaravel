<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', UserController::class . '@login');
Route::get('/register', UserController::class . '@register');
Route::post('/checkRegister', UserController::class . '@checkRegister')->name('checkRegister');
Route::post('/checkLogin', UserController::class . '@checkLogin')->name('checkLogin');


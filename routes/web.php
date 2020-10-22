<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/trains', [TrainController::class, 'index']);
Route::get('/trains/{train}', [TrainController::class, 'show']);


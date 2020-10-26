<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware ('auth') -> group (function () {
    Route::get('/', [TrainController::class, 'index'])->name('home');
    Route::get('/trains/{train}', [TrainController::class, 'show']);
});

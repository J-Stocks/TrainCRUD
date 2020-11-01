<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/trains', [TrainController::class, 'index']);
    Route::get('/trains/create', [TrainController::class, 'create']);
    Route::post('/trains', [TrainController::class, 'store']);
    Route::get('/trains/{train}', [TrainController::class, 'show']);
    Route::get('/trains/{train}/edit', [TrainController::class, 'edit']);
    Route::patch('/trains/{train}/', [TrainController::class, 'update']);
});

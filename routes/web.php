<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'doLogin']);
Route::get('/dashboard', [GeneralController::class, 'indexOfDashboard']);

<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function() {
    Route::get('/', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'doLogin'])->name('login');
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', [SessionController::class, 'doLogout']);
    Route::get('/dashboard', [GeneralController::class, 'indexOfDashboard']);

});

Route::middleware('admin')->group(function() {

});
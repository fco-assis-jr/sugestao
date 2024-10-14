<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PCemprController;

Route::get('/', [PCemprController::class, 'index'])->name('index');

Route::post('/login', [PCemprController::class, 'ValidarLogin'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

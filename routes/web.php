<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'tweets')->middleware('auth')->name('tweets');
Route::view('/upload','upload')->middleware('auth')->name('upload');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;



// home page
Route::get('/', [HomeController::class, 'homepage'])->name('home');

// abouts page
Route::get('/abouts', [HomeController::class, 'aboutapage'])->name('abouts');

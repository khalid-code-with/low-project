<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ContactsController;


// home page
Route::get('/', [HomeController::class, 'homepage'])->name('home');

// abouts page
Route::get('/abouts', [HomeController::class, 'aboutapage'])->name('abouts');

// contac page
Route::get('/contacts', [ContactsController::class, 'contactpage'])->name('contact');

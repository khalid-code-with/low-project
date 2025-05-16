<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BlockController;

// home page
Route::get('/', [HomeController::class, 'homepage'])->name('home');

// abouts page
Route::get('/abouts', [HomeController::class, 'aboutapage'])->name('abouts');

// contac page
Route::get('/contacts', [ContactsController::class, 'contactpage'])->name('contact');

// blog
Route::get('/blog', [BlockController::class, 'blogs'])->name('blog');

<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('include.header');
// });


Route::get('/', function () {
    return view('partials.home');
});

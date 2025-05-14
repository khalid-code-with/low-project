<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home page
    public function homepage()
    {
        return view("partials.home");
    }

    // about page
    public function aboutapage()
    {
        return view("partials.abouts");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function blogs()
    {
        return view("partials.blog");
    }
}

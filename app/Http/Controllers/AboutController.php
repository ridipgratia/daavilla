<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // ------------------ about page load ---------------------
    public function index(Request $request)
    {
        return view('about');
    }
}

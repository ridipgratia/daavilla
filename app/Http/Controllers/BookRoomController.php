<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function index(Request $request)
    {
        return view('book_room');
    }
}

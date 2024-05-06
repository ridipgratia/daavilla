<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRoomController extends Controller
{

    // ------- book room page index -------------
    public function index(Request $request)
    {
        return view('book_room');
    }
}

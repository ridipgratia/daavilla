<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function getRoomPage(){
        return view('rooms');
    }
 }

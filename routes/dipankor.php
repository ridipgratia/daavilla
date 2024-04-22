<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;

// ''''''''''''''''''''''route for home page DAAVILLA'''''''''''''''''''''''
Route::get('/',[HomeController::class,'getHomePage'])->name('home');
//'''''''''''''''''''''''route for rooms page DAAVILLA''''''''''''''''''''''
Route::get('/rooms',[RoomController::class,'getRoomPage'])->name('rooms');
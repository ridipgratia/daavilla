<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;

Route::get('/',[HomeController::class,'getHomePage'])->name('home');
Route::get('/rooms',[RoomController::class,'getRoomPage'])->name('rooms');
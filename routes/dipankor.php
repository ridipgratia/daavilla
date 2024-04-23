<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;

// ''''''''''''''''''''''route for home page DAAVILLA'''''''''''''''''''''''
Route::get('/',[HomeController::class,'getHomePage'])->name('home');
//'''''''''''''''''''''''route for rooms page DAAVILLA''''''''''''''''''''''
Route::get('/rooms',[RoomController::class,'getRoomPage'])->name('rooms');
//'''''''''''''''''''''''route for contact page DAAVILLA''''''''''''''''''''
Route::get('/contact',[ContactController::class,'getContactPage'])->name('contact');
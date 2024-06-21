<?php

use App\Http\Controllers\BookingController;
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
//''''''''''''''''''''route for book now ''''''''''''//
Route::get('/booknow',[BookingController::class,'index'])->name('booking.index');
//''''''''''''''''''''route for checking availability'''''''''''//
Route::post('/booknow/checkavailability',[BookingController::class,'checkAvailability'])->name('rooms.checkAvailability');
Route::get('/booknow/checkavailability',[BookingController::class,'redirect'])->name('redirect');
//'''''''''''''''''''''route for selected room details''''''''''''''//
// Route::post('/room/confirmation',[BookingController::class,'confirmation'])->name('rooms.confirmation');

<?php

use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookRoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;

// ---------------------- about page load --------------------
Route::get('/about', [AboutController::class, 'index']);
// ----------------------- service page load -----------------
Route::get('/service', [ServiceController::class, 'index']);
// ------------------ submit newsletter ----------------
Route::post('/newsletter-submit', [NewsLetterController::class, 'postNewsLetter']);
// ------------- contact form submit ----------------
Route::post('/contact-form', [ContactController::class, 'contactFormSubmit']);
// -------------------- booking routes -----------------------
Route::get('/first-form-booking', [BookingController::class, 'firstFormBooking']);
// -------------------- testing booking date -------------------
Route::get('/first-booking-page-get', [BookingController::class, 'firstFormBookingGet']);
// ------------------ book room -----------------
Route::get('/book-room', [BookRoomController::class, 'index']);
Route::get('/contact',[ContactController::class,'getContactPage'])->name('contact');
Route::get('/roomdetails', [RoomDetailsController::class,'getRoomdetailsForm'])->name('roomDetailsForm');

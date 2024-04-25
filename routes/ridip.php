<?php


use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
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

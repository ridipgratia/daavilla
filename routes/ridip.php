<?php


use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
// ---------------------- about page load --------------------
Route::get('/about', [AboutController::class, 'index']);
// ----------------------- service page load -----------------
Route::get('/service', [ServiceController::class, 'index']);

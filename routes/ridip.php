<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

// ---------------------- about page load --------------------
Route::get('/about', [AboutController::class, 'index']);

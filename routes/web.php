<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'create']); // Display the form
Route::post('/register', [UserController::class, 'store']); // Handle form submission
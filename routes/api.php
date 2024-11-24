<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\json;

// Get all users
Route::get('/user', [UserController::class, 'index']);

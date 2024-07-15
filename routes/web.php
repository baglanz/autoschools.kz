<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\SchoolsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/schools', [SchoolsController::class, 'index']);
Route::get('/instructors', [InstructorsController::class, 'index']);

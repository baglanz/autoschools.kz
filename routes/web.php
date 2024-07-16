<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\SchoolsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('schools', SchoolsController::class);
Route::resource('instructors', InstructorsController::class);

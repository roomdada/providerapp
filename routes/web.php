<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('categories/{slug}', [HomeController::class, 'getCategoryService'])->name('categories.show');
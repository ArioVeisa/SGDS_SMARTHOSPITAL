<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('welcome');
});

// About page route
Route::get('/about', function () {
    return view('about');
});

// Articles route handled by BlogController
Route::get('/articles', [BlogController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [BlogController::class, 'show'])->name('articles.show');

// Dashboard route, protected by authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes, protected by authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

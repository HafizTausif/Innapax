<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('home'); // Named route for home

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/explore', [PageController::class, 'explore'])->name('explore');
Route::get('/profiles', [PageController::class, 'profiles'])->name('profiles.index');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Authentication Routes (from auth.php)
require __DIR__.'/auth.php';

// Authenticated User Routes
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    
Route::middleware(['auth', 'verified','role:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes

    
    // Other admin routes here
});
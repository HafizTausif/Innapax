<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\EventController as userevent;
use App\Http\Controllers\Admin\RsvpController;
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
Route::get('/events', [userevent::class, 'index'])->name('events');
Route::get('/events/{event}', [userevent::class, 'show'])->name('events.show');
// Authentication Routes (from auth.php)
require __DIR__.'/auth.php';

// Authenticated User Routes
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Event Management Routes
    Route::resource('events', EventController::class)->except(['show']);
    
    // Event Image Routes
    Route::post('events/{event}/images/{image}/set-primary', [EventController::class, 'setPrimaryImage'])
        ->name('events.set-primary-image');
    Route::delete('events/images/{image}', [EventController::class, 'deleteImage'])
        ->name('events.delete-image');
    
    // User Management Routes
    Route::resource('users', UserController::class);
    
    // RSVP Management Routes
    Route::resource('rsvps', RsvpController::class)->except(['create', 'store', 'show']);
    Route::get('events/{event}/rsvps', [RsvpController::class, 'eventRsvps'])->name('events.rsvps');
});

Route::middleware(['auth', 'verified','role:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
       Route::post('events/{event}/rsvp', [userevent::class, 'rsvp'])->name('events.rsvp.store');
    Route::delete('events/{event}/rsvp', [userevent::class, 'cancelRsvp'])->name('events.rsvp.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('events/{event}/comments', [userevent::class, 'storeComment'])
         ->name('events.comments.store');
    Route::delete('events/{event}/comments/{comment}', [userevent::class, 'destroyComment'])
         ->name('events.comments.destroy');
});


// Public Comment Viewing (no auth needed)
Route::get('events/{event}/comments', [userevent::class, 'show'])->name('events.comments.index');


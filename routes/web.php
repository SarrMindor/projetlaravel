<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentification
require __DIR__.'/auth.php';

// Routes protégées par l'authentification
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


    Route::get('/', [HomeController::class, 'index']);
    Route::resource('competitions', CompetitionController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('players', PlayerController::class);
    Route::resource('results', ResultController::class);
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

});


// Routes protégées par le middleware admin
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
    
    // Autres routes d'administration ici
});


// routes/web.php
Route::get('/about', function () {
    return view('about');
})->name('about');

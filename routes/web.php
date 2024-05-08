<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\F1DriversController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;


// Routes accessible only when logged in
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::get('/drivers', [F1DriversController::class, 'index'])->name('drivers');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

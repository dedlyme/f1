<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\F1DriversController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\F1HistoryController;





Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::get('/drivers', [F1DriversController::class, 'index'])->name('drivers');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/history', [F1HistoryController::class, 'index'])->name('f1.history');

    Route::get('/contacts', function () {
        return view('contacts');
    });


    Route::get('/drivers', [F1DriversController::class, 'index'])->name('drivers.index');
    Route::get('/drivers/{driverId}', [F1DriversController::class, 'show'])->name('drivers.show');
});

require __DIR__.'/auth.php';
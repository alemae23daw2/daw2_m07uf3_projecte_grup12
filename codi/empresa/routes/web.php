<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Controladors
use App\Http\Controllers\ControladorClient;

Route::get('/', function () {
    return view('inici');
});

//Controladors
Route::resource('clients', ControladorClient::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
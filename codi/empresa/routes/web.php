<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ApartamentController;
use App\Http\Controllers\LlogaController;



Route::get('/', function () {
    return view('inici');
});

Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'adminAuth'], function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    
    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })-> name('dashboard-basic');

    //Route::get('/clients/{dniClient}', 'App\Http\Controllers\ClientController@show')->name('clients.show');
    //Route::get('/clients/{dniClient}/edit', 'App\Http\Controllers\ClientController@edit')->name('clients.edit');

    Route::resource('apartaments', ApartamentController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('lloga', LlogaController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

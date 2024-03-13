<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/dashboard', function () {
    $account = Auth::user()->account;
    return view('dashboard')->with('account', $account);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/slotMachine', function () {
        return view('slotMachine');
    });

    Route::get('/rocketDice', function () {
        return view('rocketDice');
    });

    Route::get('/findTheCup', function () {
        return view('findTheCup');
    });

    Route::post('/rocketDice/play', [RocketDiceController::class, 'play'])->name('rocketDice.play');


});

require __DIR__.'/auth.php';

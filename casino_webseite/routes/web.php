<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/team', function () {
    return Inertia::render('Team');
});

Route::get('/dashboard', function () {
    $account = Auth::user()->account;

    return Inertia::render('Dashboard', [
        'account' => $account,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/slotMachine', function () {
    return Inertia::render('SlotMachine');
})->middleware(['auth', 'verified'])->name('slotMachine');

Route::get('/rocketDice', function () {
    return Inertia::render('RocketDice');
})->middleware(['auth', 'verified'])->name('rocketDice');

Route::get('/findTheCup', function () {
    return Inertia::render('FindTheCup');
})->middleware(['auth', 'verified'])->name('findTheCup');

Route::get('/animationsTest', function () {
    return Inertia::render('animationsTest');
})->middleware(['auth', 'verified'])->name('animationsTest');


Route::get('/animations_Dice', function () {
    return Inertia::render('animations_Dice');
})->middleware(['auth', 'verified'])->name('animations_Dice');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/rocketDice/play', [RocketDiceController::class, 'play'])->name('rocketDice.play');

});

require __DIR__.'/auth.php';

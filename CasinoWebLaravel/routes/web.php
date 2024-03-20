<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use App\Http\Controllers\RocketDice;

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



Route::get('/testt', function (Illuminate\Http\Request $request) {
    $dice_1 = $request->session()->get('dice_1');
    $dice_2 = $request->session()->get('dice_2');
    $profit = $request->session()->get('profit');
    
    return view('animation.rocketDicePlay', compact('dice_1', 'dice_2', 'profit'));
})->middleware(['auth', 'verified'])->name('testt');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/slotMachine', function () {
        $account = Auth::user()->account;
        return view('slotMachine')->with('account', $account);
    });

    Route::get('/rocketDice', function () {
        $account = Auth::user()->account;
        return view('rocketDice')->with('account', $account);
    });

    Route::get('/findTheCup', function () {
        $account = Auth::user()->account;
        return view('findTheCup')->with('account', $account);
    });

    Route::post('/rocketDice/play', [RocketDice::class, 'play'])->name('rocketDice.play');
    
    Route::get('/ad', function () {
        $account = Auth::user()->account;
        return view('ad')->with('account', $account);
    });



    Route::post('/rocketDice/play', [RocketDice::class, 'play'])->name('rocketDice.play');


});

require __DIR__.'/auth.php';

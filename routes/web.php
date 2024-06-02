<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/myticket', function () {
    return view('myticket');
});
Route::get('/profilePersonalData', function () {
    return view('profilePersonalData');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/schedule', function () {
//     return view('schedule');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('auth')->group(function () {
    Route::view('signin', 'auth.signin')->name('signin');
    Route::view('signup', 'auth.signup')->name('signup');
    Route::post('signin', [AuthController::class, 'signin'])->name('signin-post');
    Route::post('signup', [AuthController::class, 'signup'])->name('signup-post');
    Route::post('signout', [AuthController::class, 'signout'])->name('signout');
});



Route::get('/detail', function () {
    return view('detail');
});

Route::get('/', [EventController::class, 'index'])->name('welcome');


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
Route::get('/admin/event', [EventController::class, 'indexAdmin'])->name('admin.event.index');
Route::get('/admin/event/create', [EventController::class, 'createAdmin'])->name('admin.event.create');
Route::post('/admin/event', [EventController::class, 'storeAdmin'])->name('admin.event.store');
Route::get('/admin/event/{event}/edit', [EventController::class, 'editAdmin'])->name('admin.event.edit');
Route::put('/admin/event/{event}/update', [EventController::class, 'updateAdmin'])->name('admin.event.update');
Route::delete('/admin/event/{event}/destroy', [EventController::class, 'destroyAdmin'])->name('admin.event.destroy');


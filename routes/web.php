<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::view('/', 'welcome');
Route::view('/checkout', 'checkout');
Route::view('/profile', 'profile');
Route::view('/profilePersonalData', 'profilePersonalData');
Route::view('/activities', 'activities');
Route::view('/profileMyTicket', 'profileMyTicket');
Route::view('/myticket', 'myticket');
Route::view('/profileBookmark', 'profileBookmark');
Route::view('/about', 'web.static.about');
Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('auth')->group(function () {
    Route::view('signin', 'auth.signin')->name('signin');
    Route::view('signup', 'auth.signup')->name('signup');
    Route::post('signin', [AuthController::class, 'signin'])->name('signin-post');
    Route::post('signup', [AuthController::class, 'signup'])->name('signup-post');
    Route::post('signout', [AuthController::class, 'signout'])->name('signout');
});

Route::prefix('static')->group(function () {
    Route::view('faq', 'web.static.faq')->name('faq');
    Route::view('about', 'web.static.about')->name('about');
});

Route::get('/', [EventController::class, 'index'])->name('welcome');

Route::prefix('admin/event')->group(function () {
    Route::get('/', [EventController::class, 'indexAdmin'])->name('admin.event.index');
    Route::get('create', [EventController::class, 'createAdmin'])->name('admin.event.create');
    Route::post('/', [EventController::class, 'storeAdmin'])->name('admin.event.store');
    Route::get('{event}/edit', [EventController::class, 'editAdmin'])->name('admin.event.edit');
    Route::get('{event}', [EventController::class, 'show'])->name('admin.event.show');
    Route::put('{event}/update', [EventController::class, 'updateAdmin'])->name('admin.event.update');
    Route::delete('{event}/destroy', [EventController::class, 'destroyAdmin'])->name('admin.event.destroy');
});

Route::get('/profile', [ProfileController::class, 'profileData'])->name('profile');
Route::get('/activities', [EventController::class, 'filterActivity'])->name('filter.category');
Route::get('/{event}/detail', [EventController::class, 'details'])->name('details');
Route::get('/editProfile', [ProfileController::class, 'profileEdit'])->name('profile.edit');
Route::put('/profile/{user}/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');
Route::get('/profilePersonalData', [ProfileController::class, 'profilePersonalData'])->name('profile.personal');
Route::get('/profileMyTicket', [TicketController::class, 'myTicket'])->name('profile.ticket');
Route::post('/{event}/ticket', [TicketController::class, 'create'])->name('ticket.create');

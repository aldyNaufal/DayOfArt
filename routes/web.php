<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profilePersonalData', function () {
    return view('profilePersonalData');
});

Route::get('/activities', function () {
    return view('activities');
});
Route::get('/profileMyTicket', function () {
    return view('profileMyTicket');
});

Route::get('/myticket', function () {
    return view('myticket');
});

Route::get('/profileBookmark', function () {
    return view('profileBookmark');
});

Route::get('/about', function () {
    return view('web.static.about');
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



Route::prefix('detail')->group(function () {
    Route::view('detail', 'web.details.detail')->name('detail');
});

Route::prefix('static')->group(function () {
    Route::view('faq', 'web.static.faq')->name('faq');
    Route::view('about', 'web.static.about')->name('about');
});

Route::get('/about', function () {
    return view('web.static.about');
});

Route::get('/faq', function () {
    return view('web.static.faq');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/', [EventController::class, 'index'])->name('welcome');
Route::get('/admin/event', [EventController::class, 'indexAdmin'])->name('admin.event.index');
Route::get('/admin/event/create', [EventController::class, 'createAdmin'])->name('admin.event.create');
Route::post('/admin/event', [EventController::class, 'storeAdmin'])->name('admin.event.store');
Route::get('/admin/event/{event}/edit', [EventController::class, 'editAdmin'])->name('a dmin.event.edit');
Route::get('/admin/event/{event}', [EventController::class, 'show'])->name('admin.event.show');
Route::put('/admin/event/{event}/update', [EventController::class, 'updateAdmin'])->name('admin.event.update');
Route::delete('/admin/event/{event}/destroy', [EventController::class, 'destroyAdmin'])->name('admin.event.destroy');
Route::get('/admin/event/{event}', [EventController::class, 'show'])->name('admin.event.show');

Route::get('/profile', [ProfileController::class, 'profileData'])->name('profile');

Route::get('/activities', [EventController::class, 'filterActivity'])->name('filter.category');
Route::get('/{event}/detail', [EventController::class, 'details'])->name('details');

Route::get('/editProfile', [ProfileController::class, 'profileEdit'])->name('profile.edit');
Route::put('/profile/{user}/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');
Route::get('/profilePersonalData', [ProfileController::class, 'profilePersonalData'])->name('profile.personal');

Route::get('/profileMyTicket', [TicketController::class, 'myTicket'])->name('profile.ticket');

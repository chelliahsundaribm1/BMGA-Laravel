<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Support\SupportController;
use App\Http\Controllers\User\UserController;
use App\Services\TravClanAuthService;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index']);

Route::get('lang/{locale}', function ($locale) {
    $supportedLocales = ['en', 'fr', 'es'];
    if (in_array($locale, $supportedLocales)) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
});

// Public test route
Route::get('/test-travclan-token', function (TravClanAuthService $travClan) {
    try {
        return response()->json(['token' => $travClan->getAccessToken()]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

/*
|--------------------------------------------------------------------------
| Authenticated & Verified Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard based on user role
    Route::get('/dashboard', function () {
        $user = Auth::user();

        return match (true) {
            $user->hasRole('admin')    => view('admin.dashboard'),
            $user->hasRole('support')  => view('support.dashboard'),
            $user->hasRole('customer') => view('user.dashboard'),
            default => abort(403, 'Unauthorized'),
        };
    })->name('dashboard');

    // Profile Routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Shared user resources
    Route::prefix('shared')->name('shared.')->group(function () {
        Route::view('/resources', 'shared.resources')->name('resources');
        Route::view('/notifications', 'shared.notifications')->name('notifications');
    });
});

/*
|--------------------------------------------------------------------------
| Check Login Modal Routes (Partially Protected)
|--------------------------------------------------------------------------
*/
Route::middleware(['check.login.modal'])->group(function () {

    Route::view('/secure/resource', 'secure.resource')->name('secure.resource');
    Route::view('/wishlist', 'wishlist')->name('wishlist');
    Route::view('/bookings', 'bookings')->name('bookings');

    // Flight Routes
    Route::prefix('flights')->name('flights.')->group(function () {
        Route::get('/', [FlightsController::class, 'index'])->name('index');
        Route::get('/search', [FlightsController::class, 'searchFlights'])->name('search');
        Route::get('/rules', [FlightsController::class, 'getFareRules'])->name('rules');
        Route::get('/itinerary', [FlightsController::class, 'createItinerary'])->name('itinerary.create');
        Route::get('/itinerary/{itineraryCode}', [FlightsController::class, 'getItinerary'])->name('itinerary.get');
        Route::get('/passengers/{itineraryCode}', [FlightsController::class, 'storePassengerCollection'])->name('passengers.store');
        Route::get('/reprice/{itineraryCode}', [FlightsController::class, 'reprice'])->name('reprice');
        Route::get('/book/{itineraryCode}', [FlightsController::class, 'bookFlight'])->name('book');
        Route::get('/details/{bookingCode}', [FlightsController::class, 'getBookingDetails'])->name('details');
        Route::get('/balance', [FlightsController::class, 'getWalletBalance'])->name('balance');
    });
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Add more admin-only routes here
});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    // Add more user-only routes here
});

/*
|--------------------------------------------------------------------------
| Support Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:support'])->prefix('support')->name('support.')->group(function () {
    Route::get('/dashboard', [SupportController::class, 'dashboard'])->name('dashboard');
    // Add more support-only routes here
});

/*
|--------------------------------------------------------------------------
| Auth Scaffolding (Breeze/Fortify/etc.)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';

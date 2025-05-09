<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompanyController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/flight', [HomeController::class, 'flight'])->name('flight');
Route::get('/hotel', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/car', [HomeController::class, 'car'])->name('car');
Route::get('/cruise', [HomeController::class, 'cruise'])->name('cruise');
Route::get('/tour', [HomeController::class, 'tour'])->name('tour');
Route::get('/comingsoon', [HomeController::class, 'comingsoon'])->name('comingsoon');
Route::get('/location-search', [HomeController::class, 'searchLocations']);


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
            $user->hasRole('user') => view('user.dashboard'),
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

    // // Flight Routes
    // Route::prefix('flights')->name('flights.')->group(function () {
    //     Route::get('/', [FlightsController::class, 'index'])->name('index');
    //     Route::get('/search', [FlightsController::class, 'searchFlights'])->name('search');
    //     Route::get('/rules', [FlightsController::class, 'getFareRules'])->name('rules');
    //     Route::get('/itinerary', [FlightsController::class, 'createItinerary'])->name('itinerary.create');
    //     Route::get('/itinerary/{itineraryCode}', [FlightsController::class, 'getItinerary'])->name('itinerary.get');
    //     Route::get('/passengers/{itineraryCode}', [FlightsController::class, 'storePassengerCollection'])->name('passengers.store');
    //     Route::get('/reprice/{itineraryCode}', [FlightsController::class, 'reprice'])->name('reprice');
    //     Route::get('/book/{itineraryCode}', [FlightsController::class, 'bookFlight'])->name('book');
    //     Route::get('/details/{bookingCode}', [FlightsController::class, 'getBookingDetails'])->name('details');
    //     Route::get('/balance', [FlightsController::class, 'getWalletBalance'])->name('balance');
    //     Route::get('/flight_details', [FlightsController::class, 'showFlightResults'])->name('flight_details');

    // });
});
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
        Route::get('/flight_details', [FlightsController::class, 'showFlightResults'])->name('flight_details');

    });
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Bookings
    Route::get('/bookings/hotel', [AdminController::class, 'hotelbooking'])->name('bookings.hotel');
    Route::get('/bookings/tour', [AdminController::class, 'tourbooking'])->name('bookings.tour');
    Route::get('/bookings/flight', [AdminController::class, 'flightbooking'])->name('bookings.flight');
    Route::get('/bookings/car', [AdminController::class, 'carbooking'])->name('bookings.car');
    Route::get('/bookings/cruise', [AdminController::class, 'cruisebooking'])->name('bookings.cruise');

    // Other Sections
    Route::get('/listing', [AdminController::class, 'listing'])->name('listing');
    Route::get('/enquires', [AdminController::class, 'enquires'])->name('enquires');
    Route::get('/earnings', [AdminController::class, 'earnings'])->name('earnings');
    Route::get('/reviews', [AdminController::class, 'reviews'])->name('reviews');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/account-settings', [AdminController::class, 'account_settings'])->name('account-settings');
    Route::get('/security-settings', [AdminController::class, 'security_settings'])->name('security-settings');
    Route::get('/plans-billing', [AdminController::class, 'plans_billing'])->name('plans-billings');

    // Company
    Route::post('/company/update', [CompanyController::class, 'update'])->name('company.update');
    Route::post('/company/accounts', [CompanyController::class, 'updateaccounts'])->name('company.accounts');

});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    // My Bookings
    Route::get('/bookings/flights', [UserController::class, 'flights_bookings'])->name('bookings.flights');
    Route::get('/bookings/hotels', [UserController::class, 'hotels_bookings'])->name('bookings.hotels');
    Route::get('/bookings/cars', [UserController::class, 'cars_bookings'])->name('bookings.cars');
    Route::get('/bookings/cruises', [UserController::class, 'cruises_bookings'])->name('bookings.cruises');
    Route::get('/bookings/tours', [UserController::class, 'tours_bookings'])->name('bookings.tours');

    // Other Sections
    Route::get('/reviews', [UserController::class, 'my_reviews'])->name('reviews');
    Route::get('/messages', [UserController::class, 'messages'])->name('messages');
    Route::get('/wishlist', [UserController::class, 'wishlist'])->name('wishlist');
    Route::get('/wallet', [UserController::class, 'wallet'])->name('wallet');
    Route::get('/payments', [UserController::class, 'payments'])->name('payments');
    Route::get('/profile', [UserController::class, 'my_profile'])->name('profile');
    Route::get('/notifications', [UserController::class, 'notifications'])->name('notifications');
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
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

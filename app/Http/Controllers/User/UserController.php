<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }


    public function flights_bookings()
    {
        return view('user.my_bookings.flights');
    }

    public function hotels_bookings()
    {
        return view('user.my_bookings.hotels');
    }

    public function cars_bookings()
    {
        return view('user.my_bookings.cars');
    }

    public function cruises_bookings()
    {
        return view('user.my_bookings.cruises');
    }

    public function tours_bookings()
    {
        return view('user.my_bookings.tours');
    }
    public function my_reviews()
    {
        return view('user.my_reviews');
    }

    public function messages()
    {
        return view('user.messages');
    }

    public function wishlist()
    {
        return view('user.wishlist');
    }

    public function wallet()
    {
        return view('user.wallet');
    }

    public function payments()
    {
        return view('user.payments');
    }

    public function my_profile()
    {
        return view('user.my_profile');
    }

    public function notifications()
    {
        return view('user.notifications');
    }

    public function settings()
    {
        return view('user.settings');
    }
}

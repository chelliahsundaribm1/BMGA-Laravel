<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function listing()
    {
        return view('admin.listing');
    }

    public function hotelbooking()
    {
        return view('admin.bookings.hotelbookings');
    }

    public function tourbooking()
    {
        return view('admin.bookings.tourbookings');
    }

    public function flightbooking()
    {
        return view('admin.bookings.flightbookings');
    }

    public function carbooking()
    {
        return view('admin.bookings.carbookings');
    }

    public function cruisebooking()
    {
        return view('admin.bookings.cruisebookings');
    }

    public function enquires()
    {
        return view('admin.enquires');
    }

    public function earnings()
    {
        return view('admin.earnings');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}

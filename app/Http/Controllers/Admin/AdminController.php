<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{

    public function __construct()
    {
        $company = Company::first() ?? new Company();
        View::share('company', $company);
    }
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

    public function account_settings()
    {
        return view('admin.account_settings');
    }

    public function security_settings()
    {
        return view('admin.security_settings');
    }

    public function plans_billing()
    {
        return view('admin.plans_billings');
    }
}

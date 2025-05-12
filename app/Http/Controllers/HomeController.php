<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Locations;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $locations = Locations::all(); 
        $airlines = Airlines::paginate(6);
        return view('welcome', compact('locations', 'airlines'));
    } 
    
    public function aboutus(){
        return view('aboutus');
    }

    public function contact(){
        return view('contact');
    }

    public function flight(){
        return view('flight');
    }
    
    public function hotel(){
        return view('hotel');
    }

    public function car(){
        return view('car');
    }

    public function cruise(){
        return view('cruise');
    }

    public function tour(){
        return view('tour');
    }

    public function comingsoon(){
        return view('comingsoon');
    }

    public function searchLocations(Request $request)
    {
        $searchTerm = $request->input('search');
        
        if(empty($searchTerm)) {
            return response()->json([]);
        }
    
        $locations = Locations::where('city', 'like', '%'.$searchTerm.'%')
                    ->orWhere('country', 'like', '%'.$searchTerm.'%')
                    ->take(10)
                    ->get(['id', 'city', 'country']);
        
        return response()->json($locations);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\EventType;
use App\Location;
use App\Venue;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featuredVenues = Venue::where('is_featured',1)->get();
        $event_types = EventType::all();
        $locations = Location::all();

        $newestVenue = Venue::latest()->take(6)->get();

        return view('home/home', compact('featuredVenues', 'event_types', 'locations', 'newestVenue'));
    }
}

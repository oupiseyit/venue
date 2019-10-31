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
        $featuredVenues = [
            [
                'hero_image' => "images/hero_bg_1.jpg",
                'name' => "853 S Lucerne Blvd",
                'address' => "Los Angeles, CA 90005",
                'price' => "$20,250,500<",
                'link' => "#",
            ],
            [
                'hero_image' => "images/hero_bg_3.jpg",
                'name' => "625 S. Berendo St",
                'address' => "607 Los Angeles, CA 90005",
                'price' => "$10,250,500<",
                'link' => "#",
            ]
        ];

        $event_types = EventType::all();
        $locations = Location::all();

        $newestVenue = Venue::latest()->take(6)->get();

        return view('home/home', compact('featuredVenues', 'event_types', 'locations', 'newestVenue'));
    }
}

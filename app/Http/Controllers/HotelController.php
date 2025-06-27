<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController
{
    public function index(Request $request)
    {
        $hotels = Hotel::with('kamarHotels')->get();
        return view('hotel.index', compact('hotels'));
    }

    public function show($slug)
    {
        $hotel = Hotel::with('kamarHotels')->where('slug', $slug)->firstOrFail();
        return view('hotel.show', compact('hotel'));
    }
}

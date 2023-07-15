<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function index()
    {
        return view('home/hotel', [
            'title' => 'Hotel',
            'hotels' => Hotel::paginate(6)->withQueryString()
        ]);
    }

    public function detail(Hotel $hotel)
    {
        return view('home/detail-hotel', [
            'title' => 'Detail ' . $hotel->name,
            'wisata' => $hotel
        ]);
    }
}

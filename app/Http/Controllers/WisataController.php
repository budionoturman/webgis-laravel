<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Jarak;
use App\Models\Kecamatan;
use App\Models\User;
use Clockwork\Storage\Search;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . $category->name;
        }
        if (request('kecamatan')) {
            $kecamatan = Kecamatan::firstWhere('slug', request('kecamatan'));
            $title = ' di ' . $kecamatan->name;
        }

        return view('home/wisata', [
            "title" => "Wisata" . $title,
            "wisata" => Wisata::latest()->filter(request(['search', 'category', 'kecamatan', 'user']))->paginate(6)->withQueryString()
        ]);
    }

    public function detail(Wisata $wisata)
    {
        $hotelByKecamatan = Hotel::where('kecamatan_id', $wisata->kecamatan_id)->paginate(6)->withQueryString();
        $hotelByJarak = Jarak::where('wisata_id', $wisata->id)->orderBy('jarak', 'asc')->paginate(6)->withQueryString();
        $totalHotel = DB::table('hotels')->count();

        return view('home/detail', [
            "title" => "Detail " . $wisata->title,
            "wisata" => $wisata,
            'hotelByKecamatan' => $hotelByKecamatan,
            'hotelByJarak' => $hotelByJarak,
            'hotel' => DB::select('SELECT * FROM hotels'),
            'totalHotel' => $totalHotel
        ]);
    }
}

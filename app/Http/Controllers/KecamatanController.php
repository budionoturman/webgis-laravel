<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        return view('kecamatan/kecamatans', [
            'title' => 'Semua kecamatan',
            'kecamatans' => Kecamatan::all()
        ]);
    }

    // public function index2(Kecamatan $kecamatan)
    // {
    //     return view('home/wisata', [
    //         'title' => "Wisata di : $kecamatan->name",
    //         'wisata' => $kecamatan->wisata,
    //         'kecamatan' => $kecamatan->name
    //     ]);
    // }
}

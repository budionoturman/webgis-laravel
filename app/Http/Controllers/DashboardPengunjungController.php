<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardPengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $total = DB::table('pengunjungs')->where('user_id', auth()->user()->id)->sum('jumlah');


        return view('dashboard/pengunjung/index', [
            'title' => 'Data Pengunjung',
            'totals' => $total,
            'wisatas' => Wisata::where('user_id', auth()->user()->id)->get(),
            'pengunjungs' => Pengunjung::where('user_id', auth()->user()->id)
                ->orderBy('wisata_id')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/pengunjung/create', [
            'title' => 'Tambah Data Pengunjung',
            'wisatas' => Wisata::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'wisata_id' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'nusantara' => 'required',
            'mancanegara' => 'required',
            'jumlah' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Pengunjung::create($validatedData);

        return redirect('dashboard/pengunjungs')->with('success', 'Tambah Data Pengunjung Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunjung $pengunjung)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunjung $pengunjung)
    {
        return view('dashboard/pengunjung/edit', [
            'title' => 'Edit Data',
            'pengunjungs' => $pengunjung
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunjung $pengunjung)
    {
        $validatedData = $request->validate([
            'bulan' => 'required',
            'tahun' => 'required',
            'nusantara' => 'required',
            'mancanegara' => 'required',
            'jumlah' => 'required'
        ]);
        Pengunjung::where('id', $pengunjung->id)->update($validatedData);

        return redirect('dashboard/pengunjungs')->with('success', 'Update Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunjung $pengunjung)
    {
        Pengunjung::destroy($pengunjung->id);
        return redirect('dashboard/pengunjungs')->with('success', 'Hapus Data berhasil');
    }

    public function viewPDF(Request $request)
    {
        $total = Pengunjung::where('user_id', auth()->user()->id)
            ->where('wisata_id', $request->wisata_id)
            ->sum('jumlah');

        $data = Pengunjung::where('user_id', auth()->user()->id)
            ->where('wisata_id', $request->wisata_id)
            ->orderBy('bulan')
            ->get();

        $pdf = PDF::loadView('/dashboard/laporan/view', [
            'pengunjungs' => $data,
            'totals' => $total
        ]);
        return $pdf->stream();
    }

    public function downloadPDF(Request $request)
    {
        $total = Pengunjung::where('user_id', auth()->user()->id)
            ->where('wisata_id', $request->wisata_id)
            ->sum('jumlah');

        $data = Pengunjung::where('user_id', auth()->user()->id)
            ->where('wisata_id', $request->wisata_id)
            ->orderBy('wisata_id')
            ->get();

        $pdf = PDF::loadView('dashboard/laporan/download', [
            'pengunjungs' => $data,
            'totals' => $total
        ]);
        return $pdf->download('data-wisatawan.pdf');
    }
}

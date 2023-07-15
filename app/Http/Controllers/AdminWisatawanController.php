<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Wisata;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminWisatawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = DB::table('pengunjungs')->sum('jumlah');

        return view('dashboard/wisatawan/index', [
            'title' => 'Data Wisatawan',
            'pengunjungs' => Pengunjung::all(),
            'totals' => $total,
            'wisatas' => Wisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function show(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengunjung  $pengunjung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengunjung $pengunjung)
    {
        //
    }

    public function viewPDF(Request $request)
    {
        $data = Pengunjung::where('wisata_id', $request->wisata_id)
            ->orderBy('wisata_id')
            ->get();
        $total = Pengunjung::where('wisata_id', $request->wisata_id)
            ->sum('jumlah');

        $pdf = PDF::loadView('/dashboard/laporan/view', [
            'pengunjungs' => $data,
            'totals' => $total
        ]);
        return $pdf->stream('data.pdf');
    }

    public function downloadPDF(Request $request)
    {
        $data = Pengunjung::where('wisata_id', $request->wisata_id)
            ->orderBy('wisata_id')
            ->get();
        $total = Pengunjung::where('wisata_id', $request->wisata_id)
            ->sum('jumlah');

        $pdf = PDF::loadView('/dashboard/laporan/download', [
            'pengunjungs' => $data,
            'totals' => $total
        ]);
        return $pdf->download();
    }
}

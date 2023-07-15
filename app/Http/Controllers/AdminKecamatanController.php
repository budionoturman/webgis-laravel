<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class AdminKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin');
        return view('dashboard/kecamatan/index', [
            'title' => 'kecamatan',
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin');
        return view('dashboard/kecamatan/create', [
            'title' => 'Tambah Kecamatan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('isAdmin');

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required'
        ]);

        Kecamatan::create($validatedData);
        return redirect('dashboard/kecamatans')->with('success', 'Tambah Kecamatan Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        $this->authorize('isAdmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecamatan $kecamatan)
    {
        $this->authorize('isAdmin');

        return view('dashboard/kecamatan/edit', [
            'title' => 'Edit Kecamatan',
            'kecamatans' => $kecamatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $this->authorize('isAdmin');

        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required'
        ];
        if ($request->slug != $kecamatan->slug) {
            $rules['slug'] = 'required|unique:kecamatans';
        }

        $validatedData = $request->validate($rules);
        Kecamatan::where('id', $kecamatan->id)->update($validatedData);
        return redirect('dashboard/kecamatans')->with('success', 'Edit Kecamatan Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        $this->authorize('isAdmin');

        Kecamatan::destroy($kecamatan->id);
        return redirect('dashboard/kecamatans')->with('success', 'Kecamatan Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Jarak;
use App\Http\Requests\StoreJarakRequest;
use App\Http\Requests\UpdateJarakRequest;
use App\Models\Hotel;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardJarakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/jarak/index',[
            'title' =>  'Masukan Jarak antara Wisata dan Hotel',
            'wisatas' => Wisata::where('user_id', auth()->user()->id)->get(),
            'hotels' => Hotel::all(),
            'jaraks' => Jarak::where('user_id', auth()->user()->id)->get(),
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
     * @param  \App\Http\Requests\StoreJarakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'wisata_id' => 'required',
            'hotel_id' => 'required',
            'jarak' => 'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;

        Jarak::create($validatedData);
        return redirect('/dashboard/jaraks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jarak  $jarak
     * @return \Illuminate\Http\Response
     */
    public function show(Jarak $jarak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jarak  $jarak
     * @return \Illuminate\Http\Response
     */
    public function edit(Jarak $jarak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJarakRequest  $request
     * @param  \App\Models\Jarak  $jarak
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJarakRequest $request, Jarak $jarak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jarak  $jarak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jarak $jarak)
    {
        //
    }
}

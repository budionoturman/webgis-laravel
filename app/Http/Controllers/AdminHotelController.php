<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/hotel/index', [
            'title' => 'Data Hotel',
            'hotels' => Hotel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/hotel/create',[
            'title' => 'Tambah Hotel',
            'kecamatans' => Kecamatan::all()
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:hotels',
            'alamat' => 'required',
            'bintang' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'kecamatan_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $validatedData['image'] = $file->store('toPath', ['disk' => 'upload']);
        }

        Hotel::create($validatedData);
        
        return redirect('dashboard/hotels')->with('success', 'Upload Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('dashboard/hotel/edit',[
            'title' => 'Edit Hotel',
            'kecamatans' => Kecamatan::all(),
            'hotel' => $hotel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $rules = [
            'name' => 'required|max:255',
            'alamat' => 'required',
            'bintang' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'kecamatan_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
        if ($request->slug != $hotel->slug) {
            $rules['slug'] = 'required|unique:hotels';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                // Storage::delete($request->oldImage);
                File::delete(public_path('uploads/').$request->oldImage);
            }
            // $validatedData['image'] = $request->file('image')->store('wisata-images');
            $file = $request->file('image');
            $validatedData['image'] = $file->store('toPath', ['disk' => 'upload']);
        }

        // $validatedData['user_id'] = auth()->user()->id;

        Hotel::where('id', $hotel->id)->update($validatedData);

        return redirect('dashboard/hotels')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        if ($hotel->image) {
            File::delete(public_path('uploads/').$hotel->image);
        }
        Hotel::destroy($hotel->id);
        return redirect('dashboard/hotels')->with('success', 'Berhasil Dihapus');
    }
}

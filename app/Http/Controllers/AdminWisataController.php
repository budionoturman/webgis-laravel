<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Wisata;
use App\Models\Category;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/dashboard/wisata/index', [
            'title' => 'Wisata',
            'wisata' => Wisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/wisata/create', [
            'title' => 'Tambah data',
            'categories' => Category::all(),
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:wisatas',
            'alamat' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'category_id' => 'required',
            'kecamatan_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $validatedData['image'] = $file->store('toPath', ['disk' => 'upload']);
            // $file = $request->file('image') ;
            // $fileName =  $file->getClientOriginalName() ;
            // $destinationPath = asset('storage').'/wisata-images' ;
            // $validatedData['image'] = $file->move('/',$fileName);
        }

        $validatedData['user_id'] = auth()->user()->id;

        Wisata::create($validatedData);
        
        return redirect('dashboard/wisatas')->with('success', 'Upload Berhasil');

        // $wisata = Wisata::create([
        //     'title' => $request->title,
        //     'user_id' => auth()->user()->id,
        //     'category_id' => $request->category_id,
        //     'kecamatan_id' => $request->kecamatan_id,
        //     'slug' => $request->slug,
        //     'excerpt' => Str::limit(strip_tags($request->body), 200),
        //     'body' => $request->body
        // ]);
        // $wisata->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        return view('dashboard/wisata/show', [
            'wisata' => $wisata,
            'title' => $wisata->title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisata)
    {
        return view('dashboard/wisata/edit', [
            'title' => 'Edit wisata',
            'wisata' => $wisata,
            'categories' => Category::all(),
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisata)
    {
        $rules = [
            'title' => 'required|max:255',
            'alamat' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'category_id' => 'required',
            'kecamatan_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
        if ($request->slug != $wisata->slug) {
            $rules['slug'] = 'required|unique:wisatas';
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

        Wisata::where('id', $wisata->id)->update($validatedData);

        return redirect('dashboard/wisatas')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisata)
    {
        if ($wisata->image) {
            File::delete(public_path('uploads/').$wisata->image);
        }
        Wisata::destroy($wisata->id);
        return redirect('dashboard/wisatas')->with('success', 'Berhasil Dihapus');
    }
}

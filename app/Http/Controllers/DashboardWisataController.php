<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        return view('dashboard/my_wisata/index', [
            'title' => 'My Wisata',
            'wisatas' => Wisata::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        return view('dashboard/my_wisata/create', [
            'title' => 'Tambah Wisata',
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
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:wisatas',
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
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Wisata::create($validatedData);

        return redirect('dashboard/mywisatas')->with('success', 'Upload Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $mywisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $mywisata)
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        return view('dashboard/my_wisata/show', [
            'title' => $mywisata->title,
            'wisatas' => $mywisata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $mywisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $mywisata)
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        return view('dashboard/my_wisata/edit', [
            'title' => 'Edit My Wisata',
            'wisatas' => $mywisata,
            'categories' => Category::all(),
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $mywisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $mywisata)
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        $rules = [
            'title' => 'required|max:255',
            'lat' => 'required',
            'lng' => 'required',
            'category_id' => 'required',
            'kecamatan_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
        if ($request->slug != $mywisata->slug) {
            $rules['slug'] = 'required|unique:wisatas';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                File::delete(public_path('uploads/').$request->oldImage);
            }
            $file = $request->file('image');
            $validatedData['image'] = $file->store('toPath', ['disk' => 'upload']);
        }

        // $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Wisata::where('id', $mywisata->id)->update($validatedData);

        return redirect('dashboard/mywisatas')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $mywisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $mywisata)
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }

        if ($mywisata->image) {
            Storage::delete($mywisata->image);
        }
        Wisata::destroy($mywisata->id);
        return redirect('dashboard/mywisatas')->with('success', 'Berhasil Dihapus');
    }
}

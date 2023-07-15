<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pendaftaran;
use App\Models\Status;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class AdminPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/pendaftaran/index',[
            'title' => 'Data pendaftar',
            'pendaftar' => Pendaftaran::all()
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
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        $status = Status::all();

        return view('dashboard/pendaftaran/edit',[
            'title' => 'Edit Status',
            'pendaftaran' => $pendaftaran,
            "status" => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validatedData = $request->validate([
            'status_id' => 'required',
        ]);
        Pendaftaran::where('id', $pendaftaran->id)->update($validatedData);
        return redirect('dashboard/pendaftarans')->with('success', 'Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        if ($pendaftaran->image) {
            File::delete(public_path('uploads/').$pendaftaran->image);
        }
        if ($pendaftaran->surat_permohonan) {
            File::delete(public_path('uploads/').$pendaftaran->surat_permohonan);
        }
        if ($pendaftaran->notulensi) {
            File::delete(public_path('uploads/').$pendaftaran->notulensi);
        }
        Pendaftaran::destroy($pendaftaran->id);
        return redirect('dashboard/pendaftarans')->with('success', 'Berhasil Dihapus');
    }

    public function tambah_data(Pendaftaran $pendaftaran)
    {
        return view('dashboard/pendaftaran/review',[
            'title' => 'Review',
            'data' => $pendaftaran,
            'category' => DB::table('categories')->where('name', 'like', 'desa wisata')->get(),
            'kecamatans' => Kecamatan::all(),
        ]);
    }

    public function store_data(Request $request)
    {
        $validatedData1 = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:wisatas',
            'alamat' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'category_id' => 'required',
            'kecamatan_id' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $validatedData1['image'] = $file->store('toPath', ['disk' => 'upload']);
        }


        $validatedData2 = $request->validate([
            'name' => 'required',
            'user_role' => 'required'
        ]);

        Wisata::create($validatedData1);
        User::where('id', $request['user_id'])->update($validatedData2);

        return redirect('dashboard/wisatas');
    }
}

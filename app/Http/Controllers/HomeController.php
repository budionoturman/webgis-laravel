<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Category;
use App\Models\Kecamatan;
use App\Models\Pendaftaran;
use App\Models\Pengunjung;
use App\Models\Status;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $totalWisata = DB::table('wisatas')->count();
        $totalDeswis = DB::table('wisatas')
            ->where('category_id', 3)
            ->count();
        $totalKecamatan = DB::table('kecamatans')->count();

        return view('home/home', [
            "title" => "Home",
            'totalWisata' => $totalWisata,
            'totalDeswis' => $totalDeswis,
            'totalKecamatan' => $totalKecamatan
        ]);
    }
    public function peta(Wisata $wisata)
    {
        $resultWisata = DB::select('SELECT * FROM wisatas');
        $resultHotel = DB::select('SELECT * FROM hotels');
 
        return view('home/peta', [
            "title" => "Peta",
            'wisata' => $resultWisata,
            'hotel' => $resultHotel,
            'categories' => Category::all()
        ]);
    }

    public function dashboard()
    {
        if (auth()->guest() || auth()->user()->user_role === 'user') {
            abort(403);
        }
        return view('/dashboard/index', [
            'title' => 'Dashboard',
        ]);
    }

    public function desa_wisata()
    {
        $user = Pendaftaran::where('user_id', auth()->user()->id)->get();

        return view('home/layanan/desa_wisata', [
            'title' => 'Pendaftaran',
            'category' => Category::where('name', 'like', 'desa wisata')->get(),
            'kecamatan' => Kecamatan::all(),
            'pendaftaran' => Pendaftaran::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function simpan_desa_wisata(Request $request)
    {
        $validatedData = $request->validate([
            'no_tlp' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'kecamatan_id' => 'required',
            'alamat' => 'required',
            'status_id' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'surat_permohonan' => 'required|mimes:pdf,doc,docx,zip',
            'notulensi' => 'required|mimes:pdf,doc,docx,zip',
            'image' => 'image|file|max:1024',
        ]);
        if ($request->file('image')) {
            // $validatedData['image'] = $request->file('image')->store('desa-wisata-images');
            $file = $request->file('image');
            $validatedData['image'] = $file->store('toPath', ['disk' => 'upload']);
        }
        if ($request->hasFile('surat_permohonan')) {
            // $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('surat-file');
            $file = $request->file('surat_permohonan');
            $validatedData['surat_permohonan'] = $file->store('toPath', ['disk' => 'upload']);
        }
        if ($request->hasFile('notulensi')) {
            // $validatedData['notulensi'] = $request->file('notulensi')->store('notulensi-file');
            $file = $request->file('notulensi');
            $validatedData['notulensi'] = $file->store('toPath', ['disk' => 'upload']);
        }


        $validatedData['user_id'] = auth()->user()->id;

        Pendaftaran::create($validatedData);
        return redirect('/');
    }

    public function lengkapi(Pendaftaran $pendaftaran)
    {
        return view('home/layanan/lengkapi_berkas',[
            'title' => 'Lengkapi Berkas',
            'pendaftaran' => $pendaftaran,
        ]);
    }

    public function simpan_berkas(Request $request)
    {
        $validatedData = $request->validate([
            'surat_permohonan' => 'required|mimes:pdf,doc,docx,zip',
            'notulensi' => 'required|mimes:pdf,doc,docx,zip',
        ]);
        if ($request->hasFile('surat_permohonan')) {
            if ($request->old_surat_permohonan){
                // Storage::delete($request->old_surat_permohonan);
                File::delete(public_path('uploads/').$request->old_surat_permohonan);
            }
            // $validatedData['surat_permohonan'] = $request->file('surat_permohonan')->store('surat-file');
            $file = $request->file('surat_permohonan');
            $validatedData['surat_permohonan'] = $file->store('toPath', ['disk' => 'upload']);
        }
        if ($request->hasFile('notulensi')) {
            if ($request->old_notulensi){
                // Storage::delete($request->old_notulensi);
                File::delete(public_path('uploads/').$request->old_notulensi);
            }
            // $validatedData['notulensi'] = $request->file('notulensi')->store('notulensi-file');
            $file = $request->file('notulensi');
            $validatedData['notulensi'] = $file->store('toPath', ['disk' => 'upload']);
        }
        Pendaftaran::where('id', $request->id)->update($validatedData);
        return redirect('/');

    }
}

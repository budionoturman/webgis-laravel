<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\AdminWisataController;
use App\Http\Controllers\AdminHotelController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminKecamatanController;
use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\AdminWisatawanController;
use App\Http\Controllers\DashboardJarakController;
use App\Http\Controllers\DashboardPengunjungController;
use App\Http\Controllers\DashboardWisataController;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/peta', [HomeController::class, 'peta']);


Route::get('/wisata', [WisataController::class, 'index']);
Route::get('wisata/{wisata:slug}', [WisataController::class, 'detail']);


Route::get('/hotel', [HotelController::class, 'index']);
Route::get('hotel/{hotel:slug}', [HotelController::class, 'detail']);

Route::get('/layanan/desa-wisata', [HomeController::class, 'desa_wisata'])->middleware('user');
Route::post('/layanan/desa-wisata', [HomeController::class, 'simpan_desa_wisata'])->middleware('user');
Route::get('/lengkapi-berkas/{pendaftaran:id}', [HomeController::class, 'lengkapi'])->middleware('user');
Route::post('/lengkapi-berkas/simpan', [HomeController::class, 'simpan_berkas'])->middleware('user');


Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{category:slug}', [CategoryController::class, 'index2']);


Route::get('/kecamatans', [KecamatanController::class, 'index']);
// Route::get('/kecamatans/{kecamatan:slug}', [KecamatanController::class, 'index2']);

Route::resource('/profile', ProfileController::class)->middleware('auth')->except('create');
// Route::get('/profile/{user:id}', [ProfileController::class, 'index']);

// Route::get('/authors', function () {
//     return view('author/authors', [
//         'title' => 'Daftar Author',
//         'author' => User::all()
//     ]);
// });

// Route::get('/authors/{user:username}', function (User $user) {
//     return view('home/wisata', [
//         'title' => 'Wisata Cilacap',
//         'wisata' => $user->wisata,
//         'author' => $user->name
//     ]);
// });

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);


Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('admin');

//dashboard
Route::resource('dashboard/mywisatas', DashboardWisataController::class)->except(['create', 'store']);
Route::resource('dashboard/pengunjungs', DashboardPengunjungController::class);
Route::resource('dashboard/jaraks', DashboardJarakController::class)->middleware('AdminAndEditor');


//dashboard admin
Route::resource('dashboard/wisatas', AdminWisataController::class)->middleware('admin');
Route::resource('dashboard/hotels', AdminHotelController::class)->middleware('admin');
Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('dashboard/users', AdminUserController::class)->except('show')->middleware('admin');
Route::resource('dashboard/kecamatans', AdminKecamatanController::class)->middleware('admin');
Route::resource('dashboard/wisatawans', AdminWisatawanController::class)->middleware('admin');
Route::resource('dashboard/pendaftarans', AdminPendaftaranController::class)->middleware('admin');
Route::get('pendaftarans/{pendaftaran:id}/tambah', [AdminPendaftaranController::class, 'tambah_data'])->middleware('admin');
Route::post('pendaftarans/store', [AdminPendaftaranController::class, 'store_data'])->middleware('admin');

// Route::get('pendaftarans/{pendaftaran:id}/tambah', function(Pendaftaran $pendaftaran) {
//         return $pendaftaran;
//     })->middleware('admin');


//Export PDF Admin
Route::post('wisatawan/view-pdf', [AdminWisatawanController::class, 'viewPDF'])->middleware('admin');
Route::post('wisatawan/download-pdf', [AdminWisatawanController::class, 'downloadPDF'])->middleware('admin');

//Export PDF
Route::post('laporan/view-pdf', [DashboardPengunjungController::class, 'viewPDF']);
Route::post('laporan/download-pdf', [DashboardPengunjungController::class, 'downloadPDF']);


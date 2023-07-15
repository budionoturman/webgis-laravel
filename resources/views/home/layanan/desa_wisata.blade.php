@extends('layouts/header')
@section('container')
    <div class="container">

        @if (!$pendaftaran->isEmpty())
            <div class="row">
                <div class="col-md-6">
                    <h2 class="my-5">Satus Pendaftaran</h2>
                    @foreach ($pendaftaran as $item)
                        @if ($item->status->id == '1')
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->status->keterangan }}
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-solid fa-spinner fa-spin"></i></span>
                                </li>
                            </ul>
                        @elseif($item->status->id == '2')
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pendaftar Baru
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->status->keterangan }}
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-solid fa-spinner fa-spin"></i></span>
                                </li>
                            </ul>
                        @elseif($item->status->id == '3')
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pendaftar Baru
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->status->keterangan }}
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-solid fa-spinner fa-spin"></i></span>
                                </li>
                                <form action="/lengkapi-berkas/{{ $item->id }}" method="get">
                                    <button type="submit" class="btn btn-primary mt-2">lengkapi berkas</button>
                                </form>
                            </ul>
                        @elseif($item->status->id == '4')
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pendaftar Baru
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Seleksi Berkas
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->status->keterangan }}
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-solid fa-spinner fa-spin"></i></span>
                                </li>
                            </ul>
                        @elseif($item->status->id == '5')
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Pendaftar Baru
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Seleksi Berkas
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Seleksi Kondisi dan Lokasi Desa
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->status->keterangan }}
                                    <span class="badge bg-primary rounded-pill"><i
                                            class="fa-sharp fa-solid fa-circle-check"></i></span>
                                </li>
                                @if (auth()->user()->user_role === 'edior')
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="" href="/dashboard/mywisatas"><i class="bi bi-house-door"></i> My
                                            Dashboard</a>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Hampir Selesai
                                </li>
                            </ul>
                        @elseif ($item->status->id == '6')
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $item->status->keterangan }}
                                    <i class="fa-solid fa-circle-check"></i>
                                </li>
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>
        @else
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                        <div class="col-lg-8">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pengajuan Penetapan Desa Wisata</h1>
                                </div>
                                <form action="/layanan/desa-wisata" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label for="">Identitas :</label>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ auth()->user()->name }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ auth()->user()->email }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_tlp" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                            id="no_tlp" name="no_tlp">
                                        @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <br>
                                    <label for="">Profile Desa :</label>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Nama Desa Wisata</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title">
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Kategori</label>
                                        <select class="form-select @error('catagory_id') is-invalid @enderror"
                                            id="category_id" name="category_id">
                                            @foreach ($category as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                        <select class="form-select @error('kecamatan_id') is-invalid @enderror"
                                            id="kecamatan_id" name="kecamatan_id">
                                            @foreach ($kecamatan as $k)
                                                <option value="{{ $k->id }}">{{ $k->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('kecamatan_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                                            placeholder="Masukkan Alamat"></textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="surat_permohonan" class="form-label">Surat Permohonan Desa</label>
                                        <input type="file"
                                            class="form-control @error('surat_permohonan') is-invalid @enderror"
                                            id="surat_permohonan" name="surat_permohonan">
                                        @error('surat_permohonan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="notulensi" class="form-label">Notulensi harus terdapat Berita Acara
                                            Hasil
                                            Musdes dan Daftar hadir yang dilengkapi dengan dokumentasi</label>
                                        <input type="file"
                                            class="form-control @error('notulensi') is-invalid @enderror" id="notulensi"
                                            name="notulensi">
                                        @error('notulensi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Foto Desa</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="lat" class="form-label">Latitude</label>
                                        <input type="text" class="form-control @error('lat') is-invalid @enderror"
                                            id="lat" name="lat" placeholder="klik lokasi pada peta">
                                        @error('lat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="lng" class="form-label">Longitude</label>
                                        <input type="text" class="form-control @error('lng') is-invalid @enderror"
                                            id="lng" name="lng" placeholder="klik lokasi pada peta">
                                        @error('lng')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" id="status_id" name="status_id"
                                            value="1">
                                    </div>
                                    <div id="map" style="width: 600px; height: 400px;"></div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>

    <script>
        var map = L.map('map', {
            center: [-7.58237, 108.899574, 20],
            zoom: 11
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("Copy Latitude dan Longitude: " + e.latlng.toString())
                .openOn(map);
        }
        map.on('click', onMapClick);
    </script>
@endsection

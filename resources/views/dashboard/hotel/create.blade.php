@extends('dashboard/layouts/main2')
@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Hotel</h1>
    </div>

    <div class="col-md-10 mb-5">
        <div id="map" style="width: 600px; height: 400px;"></div>
        <form method="post" action="/dashboard/hotels" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <label for="name" class="form-label">Nama Hotel</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                    name="alamat" required value="{{ old('alamat') }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lat" class="form-label">Latitude</label>
                <input type="text" class="form-control @error('lat') is-invalid @enderror" id="lat" name="lat"
                    value="{{ old('lat') }}" placeholder="klik pada peta">
                @error('lat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lng" class="form-label">Longitude</label>
                <input type="text" class="form-control @error('lng') is-invalid @enderror" id="lng" name="lng"
                    value="{{ old('lng') }}" placeholder="klik pada peta">
                @error('lng')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <select class="form-control" name="kecamatan_id">
                    @foreach ($kecamatans as $k)
                        @if (old('kecamatan_id') == $k->id)
                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                        @else
                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="bintang" class="form-label">Bintang</label>
                <select class="form-control" name="bintang">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <a href="/dashboard/hotels"><span class="btn btn-danger"><i class="bi bi-arrow-left-square">
                        Back</i></span></a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-upload"> Upload</i></button>
        </form>
    </div>

    <script>
        const title = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

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

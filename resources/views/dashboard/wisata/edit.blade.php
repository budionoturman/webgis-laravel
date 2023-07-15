@extends('dashboard.layouts.main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Wisata</h1>
    </div>

    <div class="col-md-10 mb-5">
        <div id="map" style="width: 600px; height: 400px;"></div>
        <form method="post" action="/dashboard/wisatas/{{ $wisata->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus value="{{ old('title', $wisata->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required value="{{ old('slug', $wisata->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                    name="alamat" required value="{{ old('alamat', $wisata->alamat) }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lat" class="form-label">Latitude</label>
                <input type="text" class="form-control @error('lat') is-invalid @enderror" id="lat" name="lat"
                    value="{{ old('lat', $wisata->lat) }}">
                @error('lat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lng" class="form-label">Longitude</label>
                <input type="text" class="form-control @error('lng') is-invalid @enderror" id="lng" name="lng"
                    value="{{ old('lng', $wisata->lng) }}">
                @error('lng')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $c)
                        @if (old('category_id', $wisata->category_id) == $c->id)
                            <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                        @else
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <select class="form-select" name="kecamatan_id">
                    @foreach ($kecamatans as $k)
                        @if (old('kecamatan_id', $wisata->kecamatan_id) == $k->id)
                            <option value="{{ $k->id }}" selected>{{ $k->name }}</option>
                        @else
                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <input type="hidden" name="oldImage" value="{{ $wisata->image }}">
                <label for="image" class="form-label">Image</label>
                @if ($wisata->image)
                    <img src="{{ asset('storage/' . $wisata->image) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
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
                <input id="body" type="hidden" name="body" value="{{ old('body', $wisata->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <a href="/dashboard/wisatas"><span class="btn btn-danger"><i class="bi bi-arrow-left-square">
                        Back</i></span></a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-upload"> Update Post</i></button>
        </form>
    </div>

    <script>
        const title = document.querySelector("#title");
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

@extends('dashboard/layouts/main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    <form action="/pendaftarans/store" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Identitas :</label>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->user->name }}"
                placeholder="{{ $data->user->name }}">
        </div>
        <div class="mb-3">
            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $data->user->id }}">
        </div>
        <div class="mb-3">
            <input type="hidden" class="form-control" id="user_role" name="user_role" value="editor">
        </div>
        <br>
        <div class="mb-3">
            <label for="title" class="form-label">Nama Desa Wisata</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($category as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <select class="form-control" id="kecamatan_id" name="kecamatan_id">
                @foreach ($kecamatans as $k)
                    @if (old('kecamatan_id', $data->kecamatan_id) == $k->id)
                        <option value="{{ $k->id }}" selected>{{ $k->name }}</option>
                    @else
                        <option value="{{ $k->id }}">{{ $k->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"
                value="{{ $data->alamat }}">
        </div>
        <div class="mb-3">
            <label for="lat" class="form-label">Latitude</label>
            <input class="form-control" id="lat" name="lat" value="{{ $data->lat }}">
        </div>
        <div class="mb-3">
            <label for="lng" class="form-label">Longitude</label>
            <input class="form-control" id="lng" name="lng" value="{{ $data->lng }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Foto Desa</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Tambahkan Data</button>
    </form>

    <script>
        //Slug generator
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        //Trix Text Editor
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        //Image Preview
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

        //Map 
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

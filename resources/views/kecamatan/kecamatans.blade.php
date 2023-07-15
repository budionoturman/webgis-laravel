@extends('layouts/header')
@section('container')
    <h1 class="text-center my-5">Daftar Kecamatan</h1>
    <div class="container">
        <div class="row">
            @foreach ($kecamatans as $k)
                <div class="col-md-4 mb-3">
                    <a href="/wisata?kecamatan={{ $k->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500?{{ $k->name }}" class="card-img" alt="{{ $k->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-white text-center flex-fill p-4 fs-3" style="background-color: rgba(255,115,0 ,0.7">{{ $k->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
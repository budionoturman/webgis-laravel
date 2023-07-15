@extends('layouts/header')
@section('container')
    <h1 class="text-center my-5">Daftar Kategori</h1>
    <div class="container">
        <div class="row mb-5">
            @foreach ($categories as $c)
                <div class="col-md-4">
                    <a href="/wisata?category={{ $c->slug }}">
                        <div class="card text-bg-dark mb-3">
                            <img src="https://source.unsplash.com/500x500?{{ $c->name }}" class="card-img" alt="{{ $c->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-white text-center flex-fill p-4 fs-3" style="background-color: rgba(255,115,0 ,0.7">{{ $c->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
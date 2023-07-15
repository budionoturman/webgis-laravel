@extends('layouts/header')
@section('container')

    <h1 class="text-center my-3">{{ $title }}</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <form action="/wisata">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('user'))
                        <input type="hidden" name="user" value="{{ request('user') }}">
                    @endif
                    @if (request('kecamatan'))
                        <input type="hidden" name="kecamatan" value="{{ request('kecamatan') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-primary border-0" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($wisata->count())
            <div class="row">
                @foreach ($wisata as $w)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow p-3 mb-5 bg-body rounded">
                            {{-- <img src="https://source.unsplash.com/500x400?{{ $w->category->name }}" class="card-img-top" alt="{{ $w->category->name }}"> --}}
                            @if ($w->image)
                                <div style="max-height:400px; overflow:hidden;">
                                    <img src="{{ asset('uploads/' . $w->image) }}" alt="{{ $w->category->name }}"
                                        class="card-img-top img-fluid">
                                </div>
                            @else
                                <img src="{{ asset('img') }}/Sheen-of-java.jpg" alt="ayo wisata ke cilacap"
                                    class="card-img-top img-fluid">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $w->title }}</h5>
                                {{-- <p><small class="text-body-secondary">{{ $w->created_at->diffForHumans() }}</small></p> --}}
                                <hr>
                                <h6 class="card-subtitle mb-2 text-body-secondary">By: {{ $w->user->name }}</h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Kategori: <a
                                        href="/wisata?category={{ $w->category->slug }}">{{ $w->category->name }}</a></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary">kecamatan: <a
                                        href="/wisata?kecamatan={{ $w->kecamatan->slug }}">{{ $w->kecamatan->name }}</a>
                                </h6>
                                <hr>
                                <p class="card-text">{{ $w->alamat }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/wisata/{{ $w->slug }}" class="btn btn-primary border-0"><i
                                        class="bi bi-info-circle"> Detail</i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h3 class="text-center">Tidak Ada Tempat Wisata</h3>
        @endif

        <div class="d-flex justify-content-center">
            {{ $wisata->links() }}
        </div>
    </div>
@endsection

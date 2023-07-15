@extends('layouts/header')
@section('container')

    <h1 class="text-center my-3">{{ $title }}</h1>

    <div class="container">
        <div class="row justify-content-center">
            @if ($hotels->count())
                <div class="row">
                    @foreach ($hotels as $hotel)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 shadow p-3 mb-5 bg-body rounded">
                                {{-- <img src="https://source.unsplash.com/500x400?{{ $w->category->name }}" class="card-img-top" alt="{{ $w->category->name }}"> --}}
                                @if ($hotel->image)
                                    <div style="max-height:400px; overflow:hidden;">
                                        <img src="{{ asset('uploads/' . $hotel->image) }}" alt="{{ $hotel->name }}"
                                            class="card-img-top img-fluid">
                                    </div>
                                @else
                                    <img src="{{ asset('img') }}/Sheen-of-java.jpg" alt="Ayo wisata ke cilacap"
                                        class="card-img-top img-fluid">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $hotel->name }}</h5>
                                    <p><small class="text-body-secondary">{{ $hotel->created_at->diffForHumans() }}</small>
                                    </p>
                                    <hr>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">kecamatan: <a
                                            href="#">{{ $hotel->kecamatan->name }}</a></h6>
                                    <hr>
                                    <p class="card-text">{{ $hotel->alamat }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="/hotel/{{ $hotel->slug }}" class="btn btn-primary border-0"><i
                                            class="bi bi-info-circle"> Detail</i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h3 class="text-center">Tidak Ada Hotel</h3>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $hotels->links() }}
    </div>
@endsection

@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-start mb-5">
            <div class="col-md-8">
                <h2 class="my-4">{{ $wisata->title }}</h2>
                <a href="/dashboard/wisatas"><button class="btn btn-success btn-sm"><i class="bi bi-arrow-left-square"> Back</i></button></a>
                <a href="/dashboard/wisatas/{{ $wisata->id }}/edit"><button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"> Edit</i></button></a>
                <form action="/dashboard/wisatas/{{ $wisata->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mt-1 btn-sm" onclick="return confirm('Yakin?')"><i class="bi bi-trash3-fill"> Delete</i></button>
                </form>

                @if ($wisata->image)
                    <div style="max-height:400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $wisata->image) }}" alt="{{ $wisata->category->name }}" class="card-img-top img-fluid mt-3"> 
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $wisata->category->name }}" alt="{{ $wisata->category->name }}" class="card-img-top img-fluid mt-3">
                @endif

                <article class="my-3">
                    {!! $wisata->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
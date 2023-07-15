@extends('dashboard.layouts.main2')

@section('container')
    <div class="container">
        <div class="row justify-content-start mb-5">
            <div class="col-md-8">
                <h2 class="my-4">{{ $wisatas->title }}</h2>
                <a href="/dashboard/mywisatas"><button class="btn btn-success btn-sm"><i class="bi bi-arrow-left-square">
                            Back</i></button></a>
                <a href="/dashboard/mywisatas/{{ $wisatas->id }}/edit"><button class="btn btn-warning btn-sm"><i
                            class="bi bi-pencil-square"> Edit</i></button></a>
                <form action="/dashboard/mywisatas/{{ $wisatas->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger mt-1 btn-sm" onclick="return confirm('Yakin?')"><i
                            class="bi bi-trash3-fill"> Delete</i></button>
                </form>

                @if ($wisatas->image)
                    <div style="max-height:400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $wisatas->image) }}" alt="{{ $wisatas->category->name }}"
                            class="card-img-top img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $wisatas->category->name }}"
                        alt="{{ $wisatas->category->name }}" class="card-img-top img-fluid mt-3">
                @endif

                <article class="my-3">
                    {!! $wisatas->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

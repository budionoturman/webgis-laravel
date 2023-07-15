@extends('layouts/header')
@section('container')

    <h1 class="text-center my-5">{{ $author }}</h1>

    @foreach ($wisata as $w)
        <article>
            <h1>{{ $w->title }}</h1>
            <h5>By: {{ $w->author }}</h5>
            <p>{{ $w->excerpt }}</p>
            <a href="/wisata/{{ $w->slug }}">more details...</a>
        </article>
    @endforeach
    
@endsection
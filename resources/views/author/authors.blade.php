@extends('layouts/header')
@section('container')
    <h1 class="text-center my-5">Daftar Akun</h1>
    @foreach ($author as $a)
        <ul>
            <li>
                <a href="/authors/{{ $a->username }}">{{ $a->name }}</a>
            </li>
        </ul>
    @endforeach
@endsection
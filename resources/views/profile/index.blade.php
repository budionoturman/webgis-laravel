@extends('layouts.header')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6 my-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <b>{{ session('success') }}</b>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">My profile</h4>
                </div>
                <div class="mt-3" style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
                    {{-- <img src="{{ asset('storage/' . $users->image) }}" class="card-img-top img-fluid" alt="..."> --}}
                    @if ($users->image)
                            <img src="{{ asset('storage/' . $w->image) }}" alt="{{ $w->category->name }}" class="card-img-top img-fluid">
                    @else
                            <img src="/img/profile.jpg" alt="..." class="card-img-top img-fluid">
                    @endif
                </div>
                <div class="card-body">
                  <p class="card-title text-center">{{ $users->name }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/profile/{{ $users->id }}">Profile Lengkap</a></li>
                  <li class="list-group-item"><a href="/profile/{{ $users->id }}/edit">Edit Profile</a></li>
                  <li class="list-group-item"><a href="#">Change password</a></li>
                </ul>
                <div class="card-footer">
                    <a href="/home"><span class="btn btn-danger"><i class="bi bi-arrow-left-square"> Back</i></span></a>
                </div>
              </div>
        </div>
    </div>
@endsection
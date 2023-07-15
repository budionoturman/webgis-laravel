@extends('layouts.header')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6 my-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">My profile</h4>
                </div>
                {{-- <div class="mt-3" style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
                  <img src="{{ asset('storage/' . $users->image) }}" class="card-img-top img-fluid" alt="...">
                </div> --}}
                <div class="mt-3" style="display: block; margin-left: auto; margin-right: auto; width: 40%;">
                  @if ($users->image)
                          <img src="{{ asset('storage/' . $w->image) }}" alt="{{ $w->category->name }}" class="card-img-top img-fluid">
                  @else
                          <img src="/img/profile.jpg" alt="..." class="card-img-top img-fluid">
                  @endif
                </div>
                {{-- <img src="{{ asset('storage/' . $users->image) }}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <p class="card-title text-center">{{ $users->name }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Username : {{ $users->username }}</li>
                    <li class="list-group-item">Email : {{ $users->email }}</li>
                    <li class="list-group-item"><a href="/profile/{{ $users->id }}/edit">Edit Profile</a></li>
                    <li class="list-group-item"><a href="#">Change password</a></li>
                </ul>
                <div class="card-footer">
                  <a href="/profile"><span class="btn btn-danger"><i class="bi bi-arrow-left-square"> Back</i></span></a>
                </div>
              </div>
        </div>
    </div>
@endsection
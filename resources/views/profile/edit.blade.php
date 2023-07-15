@extends('layouts.header')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6 my-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit profile</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="/profile/{{ $users->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="my-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name', $users->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus value="{{ old('email', $users->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $users->username) }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="oldImage" value="{{ $users->image }}">
                            <label for="image" class="form-label">Image</label>
                            @if($users->image)
                              <img src="{{ asset('storage/' . $users->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                              <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                            @enderror
                          </div>
                        <a href="/profile"><span class="btn btn-danger"><i class="bi bi-arrow-left-square"> Back</i></span></a>
                        <button type="submit" class="btn btn-primary border-0"><i class="bi bi-upload"> Upload</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
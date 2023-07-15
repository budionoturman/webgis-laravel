@extends('dashboard.layouts.main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>
    <div class="col-md-10 mb-5">
        <form method="post" action="/dashboard/categories/{{ $categories->id }}">
            @method('put')
            @csrf
            <div class="my-3">
                <label for="name" class="form-label">Nama Katagori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    autofocus value="{{ old('name', $categories->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug', $categories->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/dashboard/categories"><span class="btn btn-danger"><i class="bi bi-arrow-left-square">
                        Back</i></span></a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-upload"> Upload</i></button>
        </form>
    </div>
    <script>
        const title = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endsection

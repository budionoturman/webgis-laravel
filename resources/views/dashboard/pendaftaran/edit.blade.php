@extends('dashboard/layouts/main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    <form method="post" action="/dashboard/pendaftarans/{{ $pendaftaran->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <div class="form-group">
                <label for="status_id">Status pendaftaran</label>
                <select class="form-control" id="status_id" name="status_id">
                    @foreach ($status as $item)
                        @if (old('status_id', $pendaftaran->status_id) == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->keterangan }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->keterangan }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <a href="/dashboard/pendaftarans"><span class="btn btn-danger"><i class="bi bi-arrow-left-square">
                    Back</i></span></a>
        <button type="submit" class="btn btn-primary"><i class="bi bi-upload"> Update</i></button>
    </form>
@endsection

@extends('dashboard.layouts.main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="/dashboard/categories/create"><span class="btn btn-success mb-3"><i class="bi bi-pencil-square"> Tambah
                Kategori</i></span></a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $c)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $c->name }}</td>
                                <td>
                                    {{-- <a href="/dashboard/categories/{{ $c->id }}"><button class="btn btn-info btn-sm mt-1"><i class="bi bi-eye"> Lihat</i></button></a> --}}
                                    <a href="/dashboard/categories/{{ $c->id }}/edit"><button
                                            class="btn btn-warning btn-sm mt-1"><i class="bi bi-pencil-square">
                                                Edit</i></button></a>

                                    <form action="/dashboard/categories/{{ $c->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm mt-1" onclick="return confirm('Yakin?')"><i
                                                class="bi bi-trash3-fill"> Hapus</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

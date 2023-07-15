@extends('dashboard/layouts/main2')
@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Hotel</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a href="/dashboard/hotels/create">
        <span class="btn btn-success mb-3">
            <i class="bi bi-pencil-square"> Tambah Wisata</i>
        </span>
    </a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Longitude</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotels as $hotel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hotel->name }}</td>
                                <td>{{ $hotel->kecamatan->name }}</td>
                                <td>{{ $hotel->lat }}</td>
                                <td>{{ $hotel->lng }}</td>
                                <td>
                                    {{-- <a href="/dashboard/hotels/{{ $hotel->id }}"><button
                                            class="btn btn-info btn-sm mt-1"><i class="bi bi-eye"> Lihat</i></button></a> --}}
                                    <a href="/dashboard/hotels/{{ $hotel->id }}/edit"><button
                                            class="btn btn-warning btn-sm mt-1"><i class="bi bi-pencil-square">
                                                Edit</i></button></a>

                                    <form action="/dashboard/hotels/{{ $hotel->id }}" method="post" class="d-inline">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

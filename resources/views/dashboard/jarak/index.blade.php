@extends('dashboard/layouts/main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    {{-- <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="#" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tempat Wisata</th>
                            <th>Nama</th>
                            <th>Kecamatan</th>
                            <th>Masukan Jarak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wisatas as $w)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $w->title }}</td>
                                <td>{{ $w->user->name }}</td>
                                <td>{{ $w->kecamatan->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="fa-sharp fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    {{-- tabel jarak --}}
    <button type="button" class="btn btn-outline-success mb-3" data-toggle="modal" data-target="#exampleModal">
        <i class="fa-sharp fa-solid fa-plus"></i> Tambah
    </button>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tempat Wisata</th>
                            <th>Hotel</th>
                            <th>Jarak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jaraks as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->wisata->title }}</td>
                                <td>{{ $item->hotel->name }}</td>
                                <td>{{ $item->jarak }} km</td>
                                <td></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard/jaraks" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="wisata_id">Pilih Destinasi Wisata</label>
                            <select class="form-control" id="wisata_id" name="wisata_id">
                                @foreach ($wisatas as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hotel_id">Pilih Hotel</label>
                            <select class="form-control" id="hotel_id" name="hotel_id">
                                @foreach ($hotels as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jarak">Masukan Jarak</label>
                            <input type="number" class="form-control" id="jarak" name="jarak" placeholder="km">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

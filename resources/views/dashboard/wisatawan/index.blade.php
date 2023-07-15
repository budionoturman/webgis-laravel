@extends('dashboard/layouts/main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Wisatawan</h1>
            <form action="/wisatawan/view-pdf" method="post" target="__blank" class="d-flex inline" >
                @csrf
                <label class="mt-2 mr-2" for="inlineFormCustomSelectPref">Pilih</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="wisata_id">
                    @foreach ($wisatas as $wisata)
                        <option value="{{ $wisata->id }}">{{ $wisata->title }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary my-1">Download</button>
            </form>
    </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <b>{{ session('success') }}</b>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Tempat Wisata</th>
                                <th scope="col">Pelapor</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Nusantara</th>
                                <th scope="col">Mancanegara</th>
                                <th scope="col">Jumlah Pengunjung</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengunjungs as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->wisata->title }}</td>
                                    <td>{{ $p->user->name }}</td>
                                    <td>{{ $p->bulan }}</td>
                                    <td>{{ $p->tahun }}</td>
                                    <td>{{ $p->nusantara }}</td>
                                    <td>{{ $p->mancanegara }}</td>
                                    <td>{{ $p->jumlah }}</td>
                                    <td>
                                        {{-- <a href="/dashboard/kecamatans/{{ $c->id }}"><button class="btn btn-info btn-sm mt-1"><i class="bi bi-eye"> Lihat</i></button></a> --}}
                                        <a href="/dashboard/wisatawans/{{ $p->id }}/edit"><button class="btn btn-warning btn-sm mt-1"><i class="bi bi-pencil-square"> Edit</i></button></a>

                                        <form action="/dashboard/wisatawans/{{ $p->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mt-1" onclick="return confirm('Yakin?')"><i class="bi bi-trash3-fill"> Hapus</i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>Total Wisatawan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ $totals }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
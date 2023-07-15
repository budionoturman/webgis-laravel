@extends('dashboard/layouts/main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pengajuan Desa Wisata</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Pendaftar</td>
                            <td>Nama Desa</td>
                            <td>Alamat</td>
                            <td>Surat Permohonan</td>
                            <td>Notulensi</td>
                            <td>gambar</td>
                            <td>Status pendaftaran</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ asset('uploads') }}/{{ $item->surat_permohonan }}"><span
                                            class="btn btn-success mb-3"><i class="bi bi-eye">lihat</i></span></a>
                                </td>
                                <td>
                                    <a href="{{ asset('uploads') }}/{{ $item->notulensi }}"><span
                                            class="btn btn-success mb-3"><i class="bi bi-eye">lihat</i></span></a>
                                </td>
                                <td>{{ $item->image }}</td>
                                <td>
                                    @if ($item->status->id == '1')
                                        <a href="" class="btn btn-warning"> {{ $item->status->keterangan }} </a>
                                    @elseif($item->status->id == '2')
                                        <a href="" class="btn btn-secondary"> {{ $item->status->keterangan }} </a>
                                    @elseif($item->status->id == '3')
                                        <a href="" class="btn btn-outline-danger"> {{ $item->status->keterangan }}
                                        </a>
                                    @elseif($item->status->id == '4')
                                        <a href="" class="btn btn-info"> {{ $item->status->keterangan }} </a>
                                    @elseif($item->status->id == '5')
                                        <a href="" class="btn btn-success"> {{ $item->status->keterangan }} </a>
                                    @elseif($item->status->id == '6')
                                        <a href="" class="btn btn-danger"> {{ $item->status->keterangan }} </a>
                                    @endif
                                </td>
                                <td class="d-flex inline">
                                    <a href="/dashboard/pendaftarans/{{ $item->id }}/edit"
                                        class="btn btn-outline-warning mr-1"><i
                                            class="fa-sharp fa-solid fa-pen-to-square"></i></a>

                                    @if ($item->status->id == '5')
                                        <a href="/pendaftarans/{{ $item->id }}/tambah"
                                            class="btn btn-outline-success mr-1"><i
                                                class="fa-sharp fa-solid fa-plus"></i></a>
                                    @endif

                                    <form action="/dashboard/pendaftarans/{{ $item->id }}" method="post"
                                        class="">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger" onclick="return confirm('Yakin?')"><i
                                                class="fa-solid fa-sharp fa-trash"></i></button>
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

<script></script>

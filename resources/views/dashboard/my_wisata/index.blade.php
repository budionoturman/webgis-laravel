@extends('dashboard.layouts.main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Wisataku</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- <div class="table-responsive">
      <a href="/dashboard/mywisatas/create"><span class="btn btn-success mb-3"><i class="bi bi-pencil-square"> Tambah Wisata</i></span></a>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Nama</th>
              <th scope="col">Kategori</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Kecamatan</th>
              <th></th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($wisatas as $w) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $w->title }}</td>
                    <td>{{ $w->user->name }}</td>
                    <td>{{ $w->category->name }}</td> 
                    <td>{{ $w->kecamatan->name }}</td> 
                    <td>
                        <a href="/dashboard/mywisatas/{{ $w->id }}"><button class="btn btn-info btn-sm mt-1"><i class="bi bi-eye"> Lihat</i></button></a>
                        <a href="/dashboard/mywisatas/{{ $w->id }}/edit"><button class="btn btn-warning btn-sm mt-1"><i class="bi bi-pencil-square"> Edit</i></button></a>

                        <form action="/dashboard/mywisatas/{{ $w->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm mt-1" onclick="return confirm('Yakin?')"><i class="bi bi-trash3-fill"> Hapus</i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
         </tbody>
        </table>
    </div> --}}

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tempat Wisata</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Kecamatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wisatas as $w)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $w->title }}</td>
                                <td>{{ $w->user->name }}</td>
                                <td>{{ $w->category->name }}</td>
                                <td>{{ $w->kecamatan->name }}</td>
                                <td>
                                    <a href="/dashboard/mywisatas/{{ $w->id }}"><button
                                            class="btn btn-outline-info mt-1"><i class="bi bi-eye"> Lihat</i></button></a>
                                    <a href="/dashboard/mywisatas/{{ $w->id }}/edit"
                                        class="btn btn-outline-warning mt-1"><i
                                            class="fa-sharp fa-solid fa-pen-to-square"></i></a>

                                    {{-- <form action="/dashboard/mywisatas/{{ $w->id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger mt-1" onclick="return confirm('Yakin?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

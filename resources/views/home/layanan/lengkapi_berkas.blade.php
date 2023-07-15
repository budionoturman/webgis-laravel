@extends('layouts/header')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="my-5">Lengkapi Berkas</h2>
                <form action="/lengkapi-berkas/simpan" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_surat_permohonan" value="{{ $pendaftaran->surat_permohonan }}">
                    <input type="hidden" name="old_notulensi" value="{{ $pendaftaran->notulensi }}">
                    <input type="hidden" name="id" value="{{ $pendaftaran->id }}">
                    <div class="mb-3">
                        <label for="surat_permohonan" class="form-label">Surat Permohonan Desa</label>
                        <input type="file" class="form-control @error('surat_permohonan') is-invalid @enderror"
                            id="surat_permohonan" name="surat_permohonan">
                        @error('surat_permohonan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="notulensi" class="form-label">Notulensi terbaru, harus terdapat Berita Acara
                            Hasil
                            Musdes dan Daftar hadir yang dilengkapi dengan dokumentasi</label>
                        <input type="file" class="form-control @error('notulensi') is-invalid @enderror" id="notulensi"
                            name="notulensi">
                        @error('notulensi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">lengkapi berkas</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

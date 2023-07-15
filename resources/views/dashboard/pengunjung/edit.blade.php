@extends('dashboard.layouts.main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Pengunjung</h1>
    </div>
    <div class="col-md-10 mb-5">
        <form method="post" action="/dashboard/pengunjungs/{{ $pengunjungs->id }}">
            @method('put')
            @csrf
            <div class="my-3">
                <label for="bulan" class="form-label"></label>
                <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan" name="bulan"
                    autofocus value="{{ old('bulan', $pengunjungs->bulan) }}">
                @error('bulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label"></label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                    name="tahun" value="{{ old('tahun', $pengunjungs->tahun) }}">
                @error('tahun')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3" id="data1">
                <label for="nusantara" class="form-label">Jumlah Wisatawan Nusantara</label>
                <input type="text" class="form-control @error('nusantara') is-invalid @enderror" id="nusantara"
                    name="nusantara" value="{{ old('nusantara', $pengunjungs->nusantara) }}">
                @error('nusantara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mancanegara" class="form-label">Jumlah Wisatawan Mancanegara</label>
                <input type="text" class="form-control @error('mancanegara') is-invalid @enderror" id="mancanegara"
                    name="mancanegara" value="{{ old('mancanegara', $pengunjungs->mancanegara) }}">
                @error('mancanegara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Total Wisatawan</label>
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                    name="jumlah" value="{{ old('jumlah', $pengunjungs->jumlah) }}">
                @error('jumlah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/dashboard/pengunjungs"><span class="btn btn-danger"><i class="bi bi-arrow-left-square">
                        Back</i></span></a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-upload"> Upload</i></button>
        </form>
    </div>
    <script>
        const a = document.querySelector("#nusantara");
        const b = document.querySelector("#mancanegara");
        const jumlah = document.querySelector("#jumlah");

        b.addEventListener("keyup", function() {
            let prejumlah = parseInt(a.value) + parseInt(b.value);
            jumlah.value = prejumlah;
        });
    </script>
@endsection

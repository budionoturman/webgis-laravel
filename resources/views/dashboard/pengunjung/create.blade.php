@extends('dashboard.layouts.main2')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Pengunjung</h1>
    </div>

    <div class="col-md-10 mb-5">
        <form method="post" action="/dashboard/pengunjungs">
            @csrf
            <div class="mb-3">
                <label for="wisata" class="form-label">Nama Tempat Wisata</label>
                <select class="form-control" name="wisata_id">
                    @foreach ($wisatas as $w)
                        <option value="{{ $w->id }}">{{ $w->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-3">
                <label for="bulan" class="form-label">Bulan</label>
                <select class="form-control" name="bulan" id="bulan">
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                    <option value="maret">Maret</option>
                    <option value="april">April</option>
                    <option value="mei">Mei</option>
                    <option value="juni">Juni</option>
                    <option value="juli">Juli</option>
                    <option value="agustus">Agustus</option>
                    <option value="september">September</option>
                    <option value="oktober">Oktober</option>
                    <option value="november">November</option>
                    <option value="desember">Desember</option>
                </select>
                {{-- <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan" name="bulan" autofocus value="{{ old('bulan') }}">
              @error('bulan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div> --}}
                <div class="my-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                        name="tahun" value="{{ old('tahun') }}">
                    @error('tahun')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3" id="data1">
                    <label for="nusantara" class="form-label">Jumlah Wisatawan Nusantara</label>
                    <input type="text" class="form-control @error('nusantara') is-invalid @enderror" id="nusantara"
                        name="nusantara" value="{{ old('nusantara') }}">
                    @error('nusantara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="mancanegara" class="form-label">Jumlah Wisatawan Mancanegara</label>
                    <input type="text" class="form-control @error('mancanegara') is-invalid @enderror" id="mancanegara"
                        name="mancanegara" value="{{ old('mancanegara') }}">
                    @error('mancanegara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Total Wisatawan</label>
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                        name="jumlah" value="{{ old('jumlah') }}">
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
        // const title = document.querySelector("#name");
        // const slug = document.querySelector("#slug");

        // title.addEventListener("keyup", function() {
        //     let preslug = title.value;
        //     preslug = preslug.replace(/ /g,"-");
        //     slug.value = preslug.toLowerCase();
        // });

        const a = document.querySelector("#nusantara");
        const b = document.querySelector("#mancanegara");
        const jumlah = document.querySelector("#jumlah");

        b.addEventListener("keyup", function() {
            let prejumlah = parseInt(a.value) + parseInt(b.value);
            jumlah.value = prejumlah;
        });

        // document.getElementById("jumlah").innerHTML = "test";
    </script>
@endsection

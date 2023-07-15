@extends('layouts/header')
@section('container')
    {{-- <section style="background-image: url(/img/hero-image.jpg); opacity:0.9;">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 align-self-center text-center mt-5">
                    <h1>Ayo Wisata ke Cilacap</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores officiis necessitatibus ducimus modi culpa aliquid!</p>
                </div>
                <div class="col-lg-6 my-5">
                    <img src="/img/Sheen-of-java.png" alt="..." class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative; margin-top:-70px;">
        <div class="container bg-primary rounded-3 py-5" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row mx-5 justify-content-between align-items-center text-center">
                <div class="col-lg-4 bg-info">
                    <h1>Destinasi Wisata</h1>
                </div>
                <div class="col-lg-4 bg-warning">
                    <h1>Desa Wisata</h1>
                </div>
                <div class="col-lg-4 bg-danger">
                    <h1>Kecamatan</h1>
                </div>
            </div>
            </p>
        </div>
    </section> --}}
    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img') }}/carousel/carousel1.jpg" class="w-100 h-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Dinas Pemuda Olahraga dan Pariwisata</h1>
                            <p>Jl. Jend. Ahmad Yani No.8, Sidakaya Satu, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap,
                                Jawa Tengah 53212</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img') }}/carousel/carousel2.jpg" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Ayo Wisata Ke Cilacap</h1>
                            <p>Bingung Liburan Kemana? ke Cilacap Solusinya</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img') }}/carousel/carousel3.jpg" class="w-100 h-100 object-fit-fill"
                        alt="...">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Wonderfull Indonesia</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
                                                                                                                                                                            ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#3d5afe" /><text style="font-size: 50px" x="32%"
                            y="50%" fill="#fff" dy=".3em">{{ $totalWisata }}</text>
                    </svg>
                    <h2 class="fw-normal">Destinasi Wisata</h2>
                    <p>Saat ini terdapat {{ $totalWisata }} Destinasi wisata di Kabupaten Cilacap</p>
                    <p><a class="btn btn-primary" href="/peta">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#3d5afe" /><text style="font-size: 50px" x="42%"
                            y="50%" fill="#fff" dy=".3em">{{ $totalDeswis }}</text>
                    </svg>
                    <h2 class="fw-normal">Desa Wisata</h2>
                    <p>Saat ini terdapat {{ $totalDeswis }} Desa wisata di Kabupaten Cilacap</p>
                    <p><a class="btn btn-primary" href="/wisata">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#3d5afe" /><text style="font-size: 50px" x="32%"
                            y="50%" fill="#fff" dy=".3em">{{ $totalKecamatan }}</text>
                    </svg>
                    <h2 class="fw-normal">Kecamatan</h2>
                    <p>Saat ini terdapat {{ $totalKecamatan }} Kecamatan di Kabupaten Cilacap</p>
                    <p><a class="btn btn-primary" href="/kecamatans">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="text-center">Wisata Andalan</h2>
                </div>
            </div>
            <hr class="">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Pantai Teluk Penyu</h2>
                    <p class="lead">Obyek Wisata ini merupakan obyek wisata andalan yang dimiliki Kabupaten Cilacap,
                        jaraknya sangat dekat dengan Pusat Pemerintahan / Pusat Kota yaitu hanya sekitar ± 2 km.</p>
                    <p><a class="btn btn-primary" href="/wisata">View details &raquo;</a></p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" src="{{ asset('img') }}/telukpenyu.jpg" alt="telukpenyu">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                            fill="#aaa" dy=".3em">500x500</text>
                    </svg> --}}
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Benteng Pendem </h2>
                    <p class="lead">Benteng Pendem Cilacap atau dalam bahasa belanda disebut “KUSBATTERIJ OF DE LANTONG
                        TE TJILATJAP” terletak 0,5 km ke arah selatan dari obyek wisata Pantai Teluk Penyu. Bangunan Benteng
                        Pendem ini memiliki konfigurasi yang masih kokoh diantaranya barak / ruang prajurit, klinik,
                        terowongan, penjara, ruang amunisi, ruang tembak yang dikelilingi oleh pagar dan parit tertimbun
                        tanah sedalam 1-3 meter.</p>
                    <p><a class="btn btn-primary" href="/wisata">View details &raquo;</a></p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" src="{{ asset('img') }}/bentengpendem.png" alt="bentengpendem">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                            fill="#aaa" dy=".3em">500x500</text>
                    </svg> --}}
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Havana Hills</h2>
                    <p class="lead">Havana Hills merupakan destinasi wisata yang baru diresmikan pada tahun 2022,
                        meskipun masih baru destinasi wisata ini langsung menarik banyak pengunjung dengan pemandangan alam
                        dipengunungan dan menjadi wisata andalan di kabupaten cilacap</p>
                    <p><a class="btn btn-primary" href="/wisata">View details &raquo;</a></p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" src="{{ asset('img') }}/havanahills.png" alt="havana hills">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                            fill="#aaa" dy=".3em">500x500</text>
                    </svg> --}}
                </div>
            </div>

            <hr class="featurette-divider">
        </div>
    </main>
@endsection

@extends('layouts/header')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <h2 class="my-4">{{ $wisata->title }}</h2>
                <p>By: {{ $wisata->user->name }}, kategori: <a
                        href="/wisata?category={{ $wisata->category->slug }}">{{ $wisata->category->name }} </a>, Di: <a
                        href="/wisata?kecamatan={{ $wisata->kecamatan->slug }}">{{ $wisata->kecamatan->name }}</a></p>
                {{-- <img src="https://source.unsplash.com/1200x700?{{ $wisata->category->name }}" alt="{{ $wisata->category->name }}" class="card-img-top img-fluid"> --}}

                @if ($wisata->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('uploads/' . $wisata->image) }}" alt="{{ $wisata->category->name }}"
                            class="card-img-top img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x630?{{ $wisata->category->name }}"
                        alt="{{ $wisata->category->name }}" class="card-img-top img-fluid">
                @endif

                <article class="my-3">
                    {!! $wisata->body !!}
                </article>
                <div id="map" style="height: 700px; width: 850px" class="my-4">
                    {{-- map --}}
                </div>
                {{-- <button onclick="getLocation()">Try It</button> --}}
                <a href="/wisata" class="text-decoration-none btn btn-primary border-0">back</a>
            </div>
        </div>


        @if (!$hotelByKecamatan->isEmpty())
            <div class="row">
                <h2 class="my-4">Hotel di Sekitar {{ $wisata->title }}</h2>
                @foreach ($hotelByKecamatan as $hotel)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow p-3 mb-5 bg-body rounded">
                            {{-- <img src="https://source.unsplash.com/500x400?{{ $w->category->name }}" class="card-img-top" alt="{{ $w->category->name }}"> --}}
                            @if ($hotel->image)
                                <div style="max-height:400px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $hotel->image) }}" alt="{{ $hotel->name }}"
                                        class="card-img-top img-fluid">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/1200x630?{{ $hotel->name }}"
                                    alt="{{ $hotel->name }}" class="card-img-top img-fluid">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $hotel->name }}</h5>
                                {{-- <p><small class="text-body-secondary">{{ $hotel->created_at->diffForHumans() }}</small> --}}
                                </p>
                                <hr>
                                {{-- <h6 class="card-subtitle mb-2 text-body-secondary">kecamatan: <a
                                    href="#">{{ $hotel->kecamatan->name }}</a></h6> --}}
                                <hr>
                                <p class="card-text">{{ $hotel->alamat }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/hotel/{{ $hotel->slug }}" class="btn btn-primary border-0"><i
                                        class="bi bi-info-circle"> Detail</i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $hotelByKecamatan->links() }}
            </div>
        @else
            <div class="row">
                <h2 class="my-4">Hotel Terdekat ke {{ $wisata->title }}</h2>
                @foreach ($hotelByJarak as $hotel)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow p-3 mb-5 bg-body rounded">
                            {{-- <h5 class="card-title">{{ $hotel->hotel->name }}</h5>
                            <h5 class="card-text">{{ $hotel->jarak }} km</h5> --}}
                            {{-- <img src="https://source.unsplash.com/500x400?{{ $w->category->name }}" class="card-img-top" alt="{{ $w->category->name }}"> --}}
                            @if ($hotel->hotel->image)
                                <div style="max-height:400px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $hotel->hotel->image) }}"
                                        alt="{{ $hotel->hotel->name }}" class="card-img-top img-fluid">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/1200x630?{{ $hotel->hotel->name }}"
                                    alt="{{ $hotel->hotel->name }}" class="card-img-top img-fluid">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $hotel->hotel->name }}</h5>
                                <p>{{ $hotel->jarak }} km</p>
                                <hr>
                                {{-- <h6 class="card-subtitle mb-2 text-body-secondary">kecamatan: <a
                                        href="#">{{ $hotel->kecamatan->name }}</a></h6>
                                <hr> --}}
                                <p class="card-text">{{ $hotel->hotel->alamat }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/hotel/{{ $hotel->hotel->slug }}" class="btn btn-primary border-0"><i
                                        class="bi bi-info-circle"> Detail</i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $hotelByJarak->links() }}
            </div>
        @endif
    </div>
    <script>
        // function getLocation() {
        //         if (navigator.geolocation) {
        //             navigator.geolocation.getCurrentPosition(showPosition);
        //         } else { 
        //             x.innerHTML = "Geolocation is not supported by this browser.";
        //         }
        // }

        // var latitude;
        // var longitude;
        // function showPosition(position) {
        //     latitude = position.coords.latitude;
        //     longitude = position.coords.longitude;

        // }
        // console.log(latitude);
        // console.log(longitude);

        //declare map
        var map = L.map('map', {
            center: [-7.53378, 108.99158, 12],
            zoom: 11
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }

        //geolocation start
        function onLocationFound(e) {
            const radius = e.accuracy / 2;

            const locationMarker = L.marker(e.latlng).addTo(map)
                .bindPopup(`You are within ${radius} meters from this point`).openPopup();

            const locationCircle = L.circle(e.latlng, radius).addTo(map);

            L.marker([{{ $wisata->lat }}, {{ $wisata->lng }}]).addTo(map).bindPopup(
                "Tujuan : <b>{{ $wisata->title }}</b><br>{{ $wisata->alamat }}").openPopup();

            L.Routing.control({
                waypoints: [
                    L.latLng(e.latlng), //titik A
                    L.latLng({{ $wisata->lat }}, {{ $wisata->lng }}) //titik B
                ],
                routeWhileDragging: true,

            }).addTo(map);
        }

        function onLocationError(e) {
            alert(e.message);
            L.marker([{{ $wisata->lat }}, {{ $wisata->lng }}]).addTo(map).bindPopup(
                "Tujuan : <b>{{ $wisata->title }}</b><br>{{ $wisata->alamat }}").openPopup();

            L.Routing.control({
                waypoints: [
                    L.latLng(-6.88922, 107.61929), //titik A
                    L.latLng({{ $wisata->lat }}, {{ $wisata->lng }}) //titik B
                ],
                routeWhileDragging: true,

            }).addTo(map);
        }

        map.on('locationfound', onLocationFound);
        map.on('locationerror', onLocationError);
        map.locate({
            setView: true,
            maxZoom: 16
        });


        L.marker([{{ $wisata->lat }}, {{ $wisata->lng }}]).addTo(map).bindPopup(
            "Nama : <b>{{ $wisata->title }}</b><br>{{ $wisata->alamat }}").openPopup();

        map.on('click', onMapClick);
    </script>
@endsection

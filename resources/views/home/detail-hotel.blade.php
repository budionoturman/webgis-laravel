@extends('layouts/header')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="my-4">{{ $wisata->name }}</h2>
                @if ($wisata->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $wisata->image) }}" alt="{{ $wisata->category->name }}"
                            class="card-img-top img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x630?{{ $wisata->name }}" alt="{{ $wisata->name }}"
                        class="card-img-top img-fluid">
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
        //geolocation end


        L.marker([{{ $wisata->lat }}, {{ $wisata->lng }}]).addTo(map).bindPopup(
            "Nama : <b>{{ $wisata->title }}</b><br>{{ $wisata->alamat }}").openPopup();

        // L.Routing.control({
        //     waypoints: [
        //         L.latLng(lokLatLng), //titik A
        //         L.latLng({{ $wisata->lat }}, {{ $wisata->lng }}) //titik B
        //     ],
        //     routeWhileDragging: true,

        // }).addTo(map);

        map.on('click', onMapClick);
    </script>
@endsection

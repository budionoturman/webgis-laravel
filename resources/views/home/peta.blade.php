@extends('layouts/header')
@section('container')
    <div class="container">
        <h1 class="text-center my-3">Peta Destinasi Wisata</h1>
        <div id="map" style="height: 800px; width: 1200px" class="mb-5 align-items-center">
            {{-- map --}}
        </div>
    </div>


    <script src="{{ asset('js') }}/map.js"></script>
    <script type="text/javascript">
        //basemap
        // var map = L.map('map', {
        //     center: [-7.51566, 109.05682, 20],
        //     zoom: 11
        // });
        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        // }).addTo(map);

        // layerMap
        const cities = L.layerGroup();

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
        });

        const map = L.map('map', {
            center: [-7.51566, 109.05682, 20],
            zoom: 11,
            layers: [osm, cities]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
            'OpenStreetMap.HOT': osmHOT
        };

        const overlays = {
            'Cities': cities,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

        const hotel = L.layerGroup();
        const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
        });
        layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
        layerControl.addOverlay(hotel, 'Hotel');


        // GeoJSON
        var cilacapdata = L.geoJSON(cilacapdataa).addTo(map);


        //popup
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }
        map.on('click', onMapClick);


        //custom icon marker
        var wisataIcon = L.icon({
            iconUrl: '{{ asset('img') }}/wisataicon.png',
            // shadowUrl: 'leaf-shadow.png',
            iconSize: [30, 50], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [20, 50], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        //custom icon hotel
        var hotelIcon = L.icon({
            iconUrl: '{{ asset('img') }}/hotelicon.png',
            // shadowUrl: 'leaf-shadow.png',
            iconSize: [30, 50], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [20, 50], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        // marker wisata
        @foreach ($wisata as $w)
            {
                var marker = L.marker([
                    {{ $w->lat }},
                    {{ $w->lng }}
                ], {
                    icon: wisataIcon
                }).addTo(cities);
                marker.bindPopup(
                    "<b>{{ $w->title }}</b><br>{{ $w->alamat }}<br><a href='/wisata/{{ $w->slug }}'>Detail</a>"
                );
            }
        @endforeach

        //marker hotel
        @foreach ($hotel as $h)
            {
                var marker = L.marker([
                    {{ $h->lat }},
                    {{ $h->lng }}
                ], {
                    icon: hotelIcon
                }).addTo(hotel);
                marker.bindPopup(
                    "<b>{{ $h->name }}</b><br>{{ $h->alamat }}<br><a href='/wisata/{{ $h->slug }}'>Detail</a>"
                );
            }
        @endforeach

        map.on('click', onMapClick);
    </script>
@endsection

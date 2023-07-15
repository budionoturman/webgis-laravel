<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }
            
            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgba(255, 145, 0);
            color: white;
            }
            </style>
    </head>
    <body>       
        <h3 style="text-align: center; text-transform: uppercase;">Banyaknya Pengunjung Objek Wisata 
            @foreach ($pengunjungs as $data)
                @once
                    {{ $data->wisata->title }}
                @endonce
            @endforeach
        </h3>
        
        <table id="customers" style="text-transform: capitalize">
            <thead>
                <tr>
                    <th rowspan="2">Bulan</th>
                    <th colspan="2" style="text-align: center;">Wisatawan</th>
                    <th rowspan="2">Jumlah</th>
                </tr>
                <tr>
                    <th>Nusantara</th>
                    <th>Mancanegara</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pengunjungs as $data)
                    <tr>
                        <td>{{ $data->bulan }}</td>
                        <td>{{ $data->nusantara }}</td>
                        <td>{{ $data->mancanegara }}</td>
                        <td>{{ $data->jumlah }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>Total Wisatawan</td>
                    <td></td>
                    <td></td>
                    <td>{{ $totals }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
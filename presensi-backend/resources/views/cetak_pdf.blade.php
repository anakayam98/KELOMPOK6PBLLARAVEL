<!DOCTYPE html>
<html>

<head>
    <title>Rekap Presensi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Rekap Presensi</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Waktu</th>
                <th>Masuk</th>
                <th>Pulang</th>
                <th>Lokasi (Latitude, Longitude)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($presensi as $p)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->tanggal}}</td>
                <td>{{$p->masuk}}</td>
                <td>{{$p->pulang}}</td>
                <td>{{$p->latitude}}, {{$p->longitude}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>

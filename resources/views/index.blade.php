<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>Pemain</title>
</head>
<body>
<table class= "table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>

    <tbody>

        <h1 align='center'>Daftar Pemain</h1>
        <br>

        @foreach($data_pemain as $pemain)
        <tr>
            <td>{{$pemain -> id}}</td>
            <td>{{$pemain -> nama_pemain}}</td>
            <td>{{$pemain -> no_punggung}}</td>
            <td>{{$pemain -> posisi}}</td>

        </tr>
        @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th> TOTAL </th>
            <th>{{ $jumlah_data }}</th>
            <th colspan="1"></th>
            <th>{{ $total_harga }}</th>
        </tr>
    </tfoot>

   
</table>
</body>
</html>

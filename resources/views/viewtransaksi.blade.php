<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>

    <div class="container mt-3">
   <table border="1" cellspacing="0" cellpading="3">


          <table class="table table-bordered text-center">
            <thead class="table-primary">
    <tr>
        <td>No</td>
        <td>Kode Barang</td>
        <td>Kode peminjam</td>
        <td>Status</td>
        <td callspan="2">aksi</td>
    </tr>
    </thead>


    @foreach ($transaksi as $key=> $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item['kode_barang'] }}</td>
        <td>{{ $item['kode_peminjam'] }}</td>
        <td>{{ $item['status'] }}</td>

        <td><form action="/update-transaksi/{{ $item['id'] }}" method="post">@csrf
        <button type="submit" class="btn btn-info">Selesai</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
    </form>
</body>
</html>

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

<div class="container mt-3 py-5">
    <div class="card ">
    <div class="card-header text-center">
        <h2>Edit transaksi</h2>
    </div>
        <div class="card-body">
        <form action="{{ url('transaksi/update/'.$transaksi -> id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Kode Barang</label>
                <input class="form-control" name="kode_barang" id="kode_barang" cols="30" rows="10" value="{{ $transaksi -> kode_barang}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Kode Peminjam</label>
                <input class="form-control" name="kode_peminjam" id="kode_peminjam" cols="30" rows="10" value="{{ $transaksi -> kode_peminjam}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label>
                <input class="form-control" name="status" id="status" cols="30" rows="10" value="{{ $transaksi -> status}}">
            </div>
            {{-- <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="transaksi">Belum Dikembalikan</option>
                    <option value="transaksi">Sudah Dikembalikan</option>

                </select>
            </div> --}}
                <button type="submit" class="btn btn-primary mt-3" value="SIMPAN">Save</button>
            </form>
          </div>
        </div>
  </div>

</body>
</html>

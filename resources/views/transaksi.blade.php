<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="container d-flex justify-content-center pt-5 mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">
                <form action="transaksi/post" method="post" enctype="multipart/form-data">
                    @csrf
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Transaksi</p>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="kode barang" autofocus required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="kode_peminjam" id="kode_peminjam" placeholder="kode_peminjam" autofocus required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="status" id="status" placeholder="status" autofocus required>
                    </div>
                        <button class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
     </div>
</body>
</html>

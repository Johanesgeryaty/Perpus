<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TambahBuku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text center mb-5">Data Buku</h1>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Genre</th>
                            <th>Pengarang</th>
                            <th>penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Jumlah Halaman</th>
                    </thead>
                    @foreach ($buku_online as $buku_onlines)
                    <tbody>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $buku_onlines->judul_buku }}</td>
                        <td>{{ $buku_onlines->genre }}</td>
                        <td>{{ $buku_onlines->pengarang }}</td>
                        <td>{{ $buku_onlines->penerbit }}</td>
                        <td>{{ $buku_onlines->tahun_terbit }}</td>
                        <td>{{ $buku_onlines->jumlah }}</td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tbody>
                </table>
                    @endforeach
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
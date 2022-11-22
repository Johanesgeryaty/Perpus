@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>genre</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->buku->judul_buku }}</td>
                                            <td>{{ $transaksi->buku->genre->name }}</td>
                                            <td>{{ $transaksi->buku->pengarang }}</td>
                                            <td>{{ $transaksi->buku->penerbit }}</td>
                                            <td>{{ $transaksi->buku->tahun_terbit }}</td>
                                            <td>{{ $transaksi->tgl_pinjam }}</td>
                                            <td>{{ $transaksi->tgl_kembali }}</td>
                                            <td>
                                                @if (!$transaksi->status)
                                                    <span class="text-warning">Menunggu dikonfirmasi</span>
                                                @elseif($transaksi->status == '1')
                                                    <span style="color: rgb(0, 190, 28)">Sudah dikonfirmasi</span>
                                                @else
                                                    <span style="color: red">Peminjaman Ditolak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    {{-- <li class="col-md-3" style="list-style: none; text-align:center;" >
  <div class="container" >
    <div class="">
        <figure>
          <a href="#"
            ><img src="/extra-images/book-grid-img7.jpg" alt=""
          /></a>
        </figure>
        <h3 style="margin: 1px ;">Tes Buku</h3>
        <span>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt" style="margin-bottom: 3%;" ></i>
        </span> <br>
        <button href="#" class="btn btn-primary ">Detail Buku</button>
    </div>
</div>
</li>

<li class="col-md-3" style="list-style: none; text-align:center;" >
  <div class="container" >
        <figure>
          <a href="#"
            ><img src="/extra-images/book-grid-img7.jpg" alt=""
          /></a>
        </figure>
        <h3 style="margin: 1px ;">Tes Buku</h3>
        <span>
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt" style="margin-bottom: 3%;" ></i>
        </span> <br>
        <button href="#" class="btn btn-primary ">Detail Buku</button>
  </div>
</li> --}}



@endsection

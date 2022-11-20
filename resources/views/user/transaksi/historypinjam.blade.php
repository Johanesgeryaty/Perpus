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
                            <th>Tanggal Pinjam </th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dilan 1990</td>
                        <td>Romance</td>
                        <td>Pidi Baiq</td>
                        <td>Erlangga Jaya</td>
                        <td>2018</td>
                        <td>1 November 2022</td>
                        <td> <span style="color: rgb(0, 190, 28)">Selesai</span> </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Dilan 1991</td>
                        <td>Romance</td>
                        <td>Pidi Baiq</td>
                        <td>Erlangga Jaya</td>
                        <td>2018</td>
                        <td>9 November 2022</td>
                        <td> <span style="color: rgb(255, 4, 4)">Belum Dikembalikan</span> </td>
                      </tr>
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

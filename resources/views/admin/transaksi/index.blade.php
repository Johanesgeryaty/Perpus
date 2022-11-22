@extends('layouts.main')

@section('content')

<a href="" class="btn btn-primary"> Sedang Dipinjam</a>
<a href="" class="btn btn-danger"> Belum Dikembalikan</a>
<div class="row">
  <div class="col-md-12">
      <div class="panel panel-primary">
          <div class="panel-body">
              <div class="table-responsive">
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Peminjam</th>
                          <th>Judul Buku</th>
                          <th>Tanggal Pinjam</th>
                          <th>Kembali</th>
                          <th> Aksi </th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Luqman</td>
                      <td>Mariposa</td>
                      <td>1 November 2022</td>
                      <td>5 November 2022</td>
                      <td class="btn btn-success btn-sm "> Konfir</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Faril</td>
                      <td>Anonymous</td>
                      <td>1 November 2022</td>
                      <td>5 November 2022</td>
                      <td class="btn btn-success btn-sm "> Konfir</td>
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
    

    
@endsection
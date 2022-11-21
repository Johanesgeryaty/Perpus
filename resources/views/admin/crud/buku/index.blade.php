
  @extends('layouts.main')
  @section('content')

  <div class="container">
      <div class="center">
        <div class="col-sm-12">
          <div class="page-header-title">
            <h4 class="pull-left page-title">Buku Online</h4>
            <ol class="breadcrumb pull-right">
              <li class="active">Buku Online</li>
            </ol>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="mx-auto" style="width: 200px;">
          <a href="{{ route('admin.bukuonline.tambah') }}"class="btn btn-primary mb-3">Tambah Buku</a>
      </div>
      <p></p>
      <!--  -->
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Buku Online</h3>
            </div>

            <div class="panel-body">
              <div class="table-responsive">
              <table class="table table-striped table-hover">
                  <thead>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Genre</th>
                            <th>Pengarang</th>
                            <th>penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Jumlah Halaman</th>
                            <th>Detail  </th>
                    </thead>
                    <tbody>
                        @if ($buku_online->isEmpty())
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Buku Masih Kosong</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr></tr>
                        @foreach ($buku_online as $buku_onlines)
                        <tr>
                          <th>{{ $loop->iteration }}</th>
                          <td>{{ $buku_onlines->judul_buku }}</td>
                          <td>{{ $buku_onlines->genre }}</td>
                          <td>{{ $buku_onlines->pengarang }}</td>
                          <td>{{ $buku_onlines->penerbit }}</td>
                          <td>{{ $buku_onlines->tahun_terbit }}</td>
                          <td>{{ $buku_onlines->jumlah_halaman }}</td>
                          <td><a href="{{ route('admin.bukuonline.show',$buku_onlines->id) }}" class="btn btn-primary btn-sm">Lihat</a></td>
                          <td>
                            <form action="{{ route('admin.bukuonline.hapus', $buku_onlines->id) }}" method="post">
                              @csrf
                              @method('delete')
                              <a href="{{ route('admin.bukuonline.edit', $buku_onlines->id) }}" class="btn btn-success btn-sm">Edit</a>
                              <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            </td>
                          </tr>
                          @endforeach
                        @endif

                      </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

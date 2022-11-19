{{-- @extends('layouts.main')
@section('content')
<div class="container">
    <div class="center">
      <div class="col-sm-14">
        <div class="page-header-title">
          <h4 class="pull-left page-title">Data Anggota</h4>
          <ol class="breadcrumb pull-right">
            <li class="active">Data Anggota</li>
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
            <h3 class="panel-title">Daftar Anggota</h3>
          </div>

          <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>No</th>
                    <th>Id</th>
                    <th>Judul Buku</th>
                    <th>Genre</th>
                    <th>Pengarang</th>
                    <th>penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Halaman</th>
            </thead>
            <tbody>
              @foreach ($buku_online as $buku_onlines)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $buku_onlines->id }}</td>
                <td>{{ $buku_onlines->judul_buku }}</td>
                <td>{{ $buku_onlines->genre }}</td>
                <td>{{ $buku_onlines->pengarang }}</td>
                <td>{{ $buku_onlines->penerbit }}</td>
                <td>{{ $buku_onlines->tahun_terbit }}</td>
                <td>{{ $buku_onlines->jumlah_halaman }}</td>
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
  @endsection --}}



  @extends('layouts.main')
  @section('content')
  
  <div class="container">
      <div class="center">
        <div class="col-sm-14">
          <div class="page-header-title">
            <h4 class="pull-left page-title">Data Anggota</h4>
            <ol class="breadcrumb pull-right">
              <li class="active">Data Anggota</li>
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
              <h3 class="panel-title">Daftar Anggota</h3>
            </div>

            <div class="panel-body">
              <div class="table-responsive">
              <table class="table table-striped table-hover">
                  <thead>
                            <th>No</th>
                            <th>Id</th>
                            <th>Judul Buku</th>
                            <th>Genre</th>
                            <th>Pengarang</th>
                            <th>penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Jumlah Halaman</th>
                            <th>Cover Buku</th>
                    </thead>
                    <tbody>
                      @foreach ($buku_online as $buku_onlines)
                      <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $buku_onlines->id }}</td>
                        <td>{{ $buku_onlines->judul_buku }}</td>
                        <td>{{ $buku_onlines->genre }}</td>
                        <td>{{ $buku_onlines->pengarang }}</td>
                        <td>{{ $buku_onlines->penerbit }}</td>
                        <td>{{ $buku_onlines->tahun_terbit }}</td>
                        <td>{{ $buku_onlines->jumlah_halaman }}</td>
                        <td><img src="{{ asset('images/'.$buku_onlines->cover_buku) }}" alt=""></td>
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
                      </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection



    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html> --}}

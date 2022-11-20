
  @extends('layouts.main')

  @section('content')
    
  
    <div class="container mt-5">
        <h1 class="text center mb-5">Tambah Buku</h1>
        <a href="{{ route('admin.bukuonline.index') }}"class="btn btn-primary mb-3">Data Buku</a>      
        <div class="card">
            <div class="card-body">
              <form action="{{ route('admin.bukuonline.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="judulbuku" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="judulbuku" name="judul_buku">
                </div>
                <div class="mb-3">
                  <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" id="genre" name="genre">
                </div>
                <div class="mb-3">
                  <label for="pengarang" class="form-label">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang"name="pengarang">
                </div>
                <div class="mb-3">
                  <label for="penerbit" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit"name="penerbit">
                </div>
                <div class="mb-3">
                  <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                  <input type="date" class="form-control" id="tahunterbit"name='tahun_terbit'>
                </div>
                <div class="mb-3">
                  <label for="jumlahhalaman" class="form-label">Jumlah Halaman</label>
                  <input type="text" class="form-control" id="jumlahhalaman"name="jumlah_halaman">
                </div>
                <div class="mb-3">
                  <label for="cover_buku">Cover Buku</label>
                  <input type="file" class="form-control" id="cover_buku" name="cover_buku"  accept="image/*"/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form>
            </div>
        </div>
    </div>

    @endsection   

    

@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="text center mb-5">Edit Buku</h1>
        <a href="{{ route('admin.bukuoffline.index') }}"class="btn btn-primary mb-3">Data Buku</a>
        <div class="card">
            <div class="card-body">
              <form action="{{ route('admin.bukuoffline.update', $bukuoffline->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="judulbuku" class="form-label">Judul Buku</label>
                  <input type="text" class="form-control" id="judulbuku" name="judul_buku" 
                  value="{{ $bukuoffline->judul_buku }}">
                </div>
                <div class="mb-3">
                  <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" id="genre" name="genre"
                   value="{{ $bukuoffline->genre }}">
                </div>
                <div class="mb-3">
                  <label for="pengarang" class="form-label">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang"name="pengarang" 
                  value="{{ $bukuoffline->pengarang }}">
                </div>
                <div class="mb-3">
                  <label for="penerbit" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit"name="penerbit" 
                  value="{{ $bukuoffline->penerbit }}">
                </div>
                <div class="mb-3">
                  <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                  <input type="date" class="form-control" id="tahunterbit"name='tahun_terbit' 
                  value="{{ $bukuoffline->tahun_terbit }}"> 
                </div>
                <div class="mb-3">
                  <label for="jumlahhalaman" class="form-label">Jumlah Halaman</label>
                  <input type="text" class="form-control" id="jumlahhalaman"name="jumlah_halaman" 
                  value="{{ $bukuoffline->jumlah_halaman }}">
                </div>
                <div class="mb-3">
                  <label for="stokbuku" class="form-label">Stok Buku</label>
                  <input type="number" class="form-control" id="stokbuku"name="stok_buku"
                  value="{{ $bukuoffline->stok_buku }}">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px ;float:right;">Edit</button>
              </form>
            </div>
        </div>
    </div>

@endsection

    
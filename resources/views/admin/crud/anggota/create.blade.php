@extends('layouts.main')

@section('content')
    <form action="{{ route('admin.anggota.buat') }}" method="POST">
        @csrf
        <div class="container">
            
            @if(session()->has('pesan'))
                        <div class="alert alert-info">
                                  {{ session('pesan') }}
                        </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Tambah Data Anggota</h3>
                        </div>
                        <div class="panel-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama</label>
                                <input type="text " class="form-control " name="name"
                                    id="formGroupExampleInput" placeholder="Masukan Nama">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nis</label>
                                <input type="number" class="form-control" name="nisn"
                                    id="formGroupExampleInput2" placeholder="Masukan Nis">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    id="formGroupExampleInput2" placeholder="Masukan Email">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas"
                                    id="formGroupExampleInput2" placeholder="Masukan Kelas">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan"
                                    id="formGroupExampleInput2" placeholder="Masukan Jurusan ">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    id="formGroupExampleInput2" placeholder="Masukan Password ">
                            </div>
                            <br>
                            <div class="mb-3">
                                {{-- <label for="role" class="form-label">Role</label>
                                <select class="form-control" aria-label="Default select example" id="role"
                                    name="role">
                                    <option selected>
                                        role
                                    </option>
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                </select> --}}
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            <a href="{{ route('admin.anggota.index') }}" class="btn btn-primary btn-sm">Kembali</a>
    </form>

    @endsection

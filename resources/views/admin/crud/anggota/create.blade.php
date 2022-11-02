@extends('layouts.main')

@section('content')
<form action="{{ route('admin.anggota.buat') }}" method="POST">
    @csrf
        <div class="container">
          <div class="center">
            <div class="col-sm-14">
              <div class="page-header-title">
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <p></p>
          <!--  -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title text-center">Tambah Anggota</h3>
                </div>
                <div class="panel-body">
                <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Nama</label>
                  <input type="text " class="form-control " name="name" id="formGroupExampleInput" placeholder="Masukan Nama">
                </div>
                <br>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Nis</label>
                  <input type="number" class="form-control" name="nisn" id="formGroupExampleInput2" placeholder="Masukan Nis">
                </div>
                <br>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Masukan Nis">
                </div>
                <br>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                  <input type="text" class="form-control" name="kelas" id="formGroupExampleInput2" placeholder="Masukan Kelas">
                </div>
                <br>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                  <input type="text" class="form-control" name="jurusan" id="formGroupExampleInput2" placeholder="Masukan Jurusan">
                </div>
                <br>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Masukan ">
                </div>
                <br>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" aria-label="Default select example" id="role" name="role">
                        <option selected>role</option>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
        </div>
</form>
@endsection

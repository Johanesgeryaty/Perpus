@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="center">
            <div class="col-sm-6">
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
                            <input type="text " class="form-control " id="formGroupExampleInput"
                                placeholder="Masukan Nama">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nis</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Masukan Nis">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Masukan Kelas">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Masukan Jurusan">
                        </div>
                        <br>

                        <button type="button br-8" class="btn btn-primary btn-sm">Small button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

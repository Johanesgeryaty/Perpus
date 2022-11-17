@extends('layouts.app')

@section('content')
    <form action="{{ route('user.saran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                            <h3 class="panel-title text-center">Saran</h3>
                        </div>
                        <div class="panel-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Buku</label>
                                <input type="file" class="form-control " name="gambar_buku" value=""
                                    id="formGroupExampleInput" placeholder="Masukan Nama">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Saran</label>
                                <textarea name="isi_saran" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
    </form>

@endsection
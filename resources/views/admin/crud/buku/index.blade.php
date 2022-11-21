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
                                    <th>Detail </th>
                                </thead>
                                <tbody>
                                    @foreach ($buku_online as $buku_onlines)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $buku_onlines->judul_buku }}</td>
                                            <td>{{ $buku_onlines->genre->name }}</td>
                                            <td>{{ $buku_onlines->pengarang }}</td>
                                            <td>{{ $buku_onlines->penerbit }}</td>
                                            <td>{{ $buku_onlines->tahun_terbit }}</td>
                                            <td>{{ $buku_onlines->jumlah_halaman }}</td>
                                            <td><a href="{{ route('admin.bukuonline.show', $buku_onlines->id) }}"
                                                    class="btn btn-primary btn-sm">Lihat</a></td>
                                            <td>
                                                <form action="{{ route('admin.bukuonline.hapus', $buku_onlines->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('admin.bukuonline.edit', $buku_onlines->id) }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $buku_onlines->id }}">Hapus</a>
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
            @push('script')
                <script>
                    $('.delete').click(function() {
                        var bukuId = $(this).attr('data-id');
                        console.log(bukuId);
                        swal({
                                title: "Apakah Kamu yakin ingin menghapus data ini?",
                                text: "Data yang sudah dihapus tidak bisa dikembalikan lagi!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    window.location = '/admin/buku-online/' + bukuId + '/delete'
                                    swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                    });
                                } else {
                                    swal("Hapus data dibatalkan");
                                }
                            });
                    });
                </script>
            @endpush

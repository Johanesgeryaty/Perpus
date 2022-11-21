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
                                    <th class="text-center">No</th>
                                    <th class="text-center">Judul Buku</th>
                                    <th class="text-center">Genre</th>
                                    <th class="text-center">Pengarang</th>
                                    <th class="text-center">penerbit</th>
                                    <th class="text-center">Tahun Terbit</th>
                                    <th class="text-center">Jumlah Halaman</th>
                                    <th class="text-center">Aksi</th>
                                </thead>
                                @foreach ($buku_online as $buku_onlines)
                                <tbody>
                                        <tr>
                                            <th class="text-center">{{ $loop->iteration }}</th>
                                            <td class="text-center">{{ $buku_onlines->judul_buku }}</td>
                                            <td class="text-center">{{ $buku_onlines->genre->name }}</td>
                                            <td class="text-center">{{ $buku_onlines->pengarang }}</td>
                                            <td class="text-center">{{ $buku_onlines->penerbit }}</td>
                                            <td class="text-center">{{ $buku_onlines->tahun_terbit }}</td>
                                            <td class="text-center">{{ $buku_onlines->jumlah_halaman }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.bukuonline.hapus', $buku_onlines->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('admin.bukuonline.show', $buku_onlines->id) }}"
                                                        class="btn btn-warning btn-sm">Detail</a>
                                                    <a href="{{ route('admin.bukuonline.edit', $buku_onlines->id) }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $buku_onlines->id }}">Hapus</a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                              @endforeach
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

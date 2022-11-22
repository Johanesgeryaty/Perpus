@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="center">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Data Transaksi</h4>
                    <ol class="breadcrumb pull-right">
                        <li class="active">Data Transaksi</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="mx-auto col-md-6" style="width: 200px;">
            <a class="btn btn-success" href="{{ route('admin.anggota.tambah') }}" role="button">Tambah Anggota</a>
        </div>
        <div class="container">
            <div class="mb-3 " style="text-align: end">
                <button class="btn btn-primary" data-toggle="modal" data-target="#importData">Import Data</button>
                <a href="{{ route('admin.anggota.export') }}" class="btn btn-success">Export Data</a>
            </div>
        </div>

        <p></p>

        <!--  -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <form action="{{ route('admin.anggota.index') }}" method="GET">
                            <div class="inputGroup">
                                <input type="search" required="" autocomplete="off" name="search">
                                <label for="name">Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Judul Buku</th>
                                        <th class="text-center">Nama Peminjam</th>
                                        <th class="text-center">Tgl Pinjam</th>
                                        <th class="text-center">Tgl Kembali</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->buku->judul_buku }}</td>
                                            <td>{{ $transaksi->user->name }}</td>
                                            <td>{{ $transaksi->tgl_pinjam }}</td>
                                            <td>{{ $transaksi->tgl_kembali }}</td>
                                            <td>
                                                @if ($transaksi->status == '0')
                                                    <span class="text-warning">Menunggu Konfirmasi</span>
                                                @elseif($transaksi->status == '1')
                                                    <span class="text-success">Sedang Dipinjam</span>
                                                @elseif($transaksi->status == '2')
                                                    <span class="text-danger">Peminjaman Ditolak</span>
                                                @elseif($transaksi->status == '3')
                                                    <span class="text-success">Sudah dikembalikan</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!$transaksi->status)
                                                    <a href="{{ route('admin.transaksi.konfirmasi', $transaksi->id) }}"
                                                        class="btn btn-success">✔️</a>
                                                    <a href="{{ route('admin.transaksi.tolak', $transaksi->id) }}"
                                                        class="btn btn-secondary">❌</a>
                                                @elseif($transaksi->status == '1')
                                                    <a href="{{ route('admin.transaksi.kembali', $transaksi->id) }}"
                                                        class="btn btn-success">Sudah dikembalikan</a>
                                                @endif
                                                <a href="" class="btn btn-primary">Detail</a>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="importData">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.anggota.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

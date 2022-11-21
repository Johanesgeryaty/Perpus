@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="center">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Daftar Buku Offline</h4>
                    <ol class="breadcrumb pull-right">

                        <li class="active"></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="mx-auto" style="width: 200px;">
            <a class="btn btn-primary" href="{{ route('admin.bukuoffline.create') }}" role="button">Tambah Buku</a>
        </div>
        <p></p>
        <!--  -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Buku offline</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Judul Buku</th>
                                        <th class="text-center">Pengarang</th>
                                        <th class="text-center">Penerbit</th>
                                        <th class="text-center">Tahun Terbit</th>
                                        <th class="text-center">Stok Buku</th>
                                        <th class="text-center">aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($bukuoffline as $bukuofflines)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $bukuofflines->judul_buku }}</td>
                                            <td class="text-center">{{ $bukuofflines->pengarang }}</td>
                                            <td class="text-center">{{ $bukuofflines->penerbit }}</td>
                                            <td class="text-center">{{ $bukuofflines->tahun_terbit }}</td>
                                            <td class="text-center">{{ $bukuofflines->stok_buku }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.bukuoffline.hapus', $bukuofflines->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('admin.bukuoffline.show', $bukuofflines->id) }}"
                                                        class="btn btn-warning btn-sm">Detail</a>
                                                    <a href="{{ route('admin.bukuoffline.edit', $bukuofflines->id) }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm delete"
                                                        data-id="{{ $bukuofflines->id }}">delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach


                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = '/admin/buku-offline/' + bukuId + '/delete'
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });
    </script>
@endpush

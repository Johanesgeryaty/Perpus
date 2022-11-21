@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="center">
            <div class="col-sm-15">
                <div class="page-header-title">
                    <h4 class="pull-left page-title"> Data Anggota</h4>
                    <ol class="breadcrumb pull-right">
                        <li class="active">Data Anggota</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>



    <!--  -->
    <div class="row">
        <div class="col-md-12">
            <div class=" col-md-6">
                <a class="btn btn-success" href="{{ route('admin.anggota.tambah') }}" role="button">Tambah Anggota</a>
            </div>
            <div class="container">
                <div class="mb-3 " style="text-align: end">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#importData">Import Data</button>
                    <a href="{{ route('admin.anggota.export') }}" class="btn btn-success">Export Data</a>
                </div>
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
                                    <th class="text-center">Nisn</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $user->id }}</td>
                                        <td class="text-center">{{ $user->nisn }}</td>
                                        <td class="text-center">{{ $user->name }}</td>
                                        <td class="text-center">{{ $user->kelas }}</td>
                                        <td class="text-center">{{ $user->jurusan }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.anggota.hapus', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('admin.anggota.edit', $user->id) }}"
                                                    class="btn btn-warning">edit</a>
                                                <button type="submit" class="btn btn-danger">hapus</button>
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

@push('script')
    <script>
        $('.delete').click(function() {
            var userId = $(this).attr('data-id');
            console.log(userId);
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = '/admin/daftar-anggota/' + userId + '/delete'
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

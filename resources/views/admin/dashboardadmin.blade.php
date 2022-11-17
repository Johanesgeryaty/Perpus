@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="center">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Dashboard</h4>
                    <ol class="breadcrumb pull-right">

                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- bekah terhapus -->
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Anggota</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>{{ $user->count() }}</b></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Buku Offline</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>{{ $bukuOffline }}</b></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Buku Online</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>{{ $bukuOnline }}</b></h3>
                </div>
            </div>
        </div>
    </div>
                <!--  -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Anggota</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nisn</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $users)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->nisn }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->kelas }}</td>
                            <td>{{ $users->jurusan }}</td>
                            <td><a class="btn btn-success" href="{{ route('admin.anggota.show',$users->id) }}" role="button"><i class="bi bi-eye"></i></a></td>  
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
    @endsection
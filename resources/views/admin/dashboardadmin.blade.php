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


        <div class="jlh col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Anggota</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>{{ $user->count() }}</b></h3>
                </div>
            </div>
        </div>
        <div class="jlh col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Buku Offline</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>{{ $bukuOffline }}</b></h3>
                </div>
            </div>
        </div>
        <div class="jlh col-md-4">
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
                    <form action="{{ route('admin.anggota.index') }}" method="GET">
                        <div class="input-group input-group-lg">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">search</button>
                              </span>
                            <input type="search" name="search" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                          </div>
                    </form>
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
                            <td><a href="{{ route('admin.anggota.show', $users->id) }}"class="btn btn-warning btn-sm">lihat</a></td>
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

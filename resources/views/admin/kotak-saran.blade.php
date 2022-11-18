
@extends('layouts.main')
@section('content')

        <div class="container">
          <div class="center">
            <div class="col-sm-14">
              <div class="page-header-title">
                <h4 class="pull-left page-title">Kotak Saran</h4>
                <ol class="breadcrumb pull-right">

                  <li class="active"></li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Kotak Saran</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Tanggal Dikirim</th>
                                            <th>Isi Saran</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $kotak_saran as $kotak_sarans )
                                    <tbody>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $kotak_sarans->user->name }}</td>
                                        <td class="text-center">{{ $kotak_sarans->user->jurusan }}</td>
                                        <td class="text-center">{{ $kotak_sarans->created_at }}</td>
                                        <td class="text-center">{{ $kotak_sarans->isi_saran }}</td>
                                        <td class="text-center">
                                        <form action="{{ route('admin.kotak-saran.hapus', $kotak_sarans->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">hapus</button>
                                        </form>
                                        </td>
                                    </tbody>
                                    @endforeach
                                </table>
                                {{-- <div class="button-selesai">
                                <div class="" style="float: right;" margin="auto">
                                    <div class="">
                                        <a class="btn btn-primary" href="index.php" role="button">Selesai</a>
                                        </div>
                                    </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

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
                    <h3 class=""><b>3685</b></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Buku Offline</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>25487</b></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h4 class="panel-title">Jumlah Buku Online</h4>
                </div>
                <div class="panel-body">
                    <h3 class=""><b>7797</b></h3>
                </div>
            </div>
        </div>
    </div>
                <!--  -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Customers Tables</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Lihat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $anggota = [
                        [
                            "No" => "1",
                            "Nis" => "1234567",
                            "Nama" => "ashis cahya maulana",
                            "Kelas" => "11",
                            "Jurusan" => "rpl"
                        ],
                        [
                            "No" => "1",
                            "Nis" => "1234567",
                            "Nama" => "ashis cahya maulana",
                            "Kelas" => "11",
                            "Jurusan" => "rpl"
                        ],
                        [
                            "No" => "1",
                            "Nis" => "1234567",
                            "Nama" => "ashis cahya maulana",
                            "Kelas" => "11",
                            "Jurusan" => "rpl"
                        ]
                        ];

                        ?>
                        <tr>
                        <?php foreach ($anggota as $angg) : ?>
                            <td><?= $angg["No"]; ?></td>
                            <td><?= $angg["Nis"]; ?></td>
                            <td><?= $angg["Nama"]; ?></td>
                            <td><?= $angg["Kelas"]; ?></td>
                            <td><?= $angg["Jurusan"]; ?></td>
                            <td><a class="btn btn-success" href="index.html" role="button"><i class="bi bi-eye"></i></a></td>
                        </tr>
                        <?php endforeach; ?>

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



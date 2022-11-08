
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
                                    <tbody>
                                        <?php
                                        $anggota = [
                                            [
                                                "No" => "1",
                                                "Nama" => "1234567",
                                                "Jurusan" => "ashis cahya maulana",
                                                "Tanggal" => "11",
                                            ],
                                        ];

                                        ?>
                                        <tr>
                                            <?php foreach ($anggota as $angg) : ?>
                                                <td><?= $angg["No"]; ?></td>
                                                <td><?= $angg["Nama"]; ?></td>
                                                <td><?= $angg["Jurusan"]; ?></td>
                                                <td><?= $angg["Tanggal"]; ?></td>
                                                <td><a class="btn btn-success" href="index.php" role="button"><i class="bi bi-eye"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>
                                </table>
                                <div class="button-selesai">
                                <div class="" style="float: right;" margin="auto">
                                    <div class="">
                                        <a class="btn btn-primary" href="index.php" role="button">Selesai</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

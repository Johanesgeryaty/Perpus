
@extends('layouts.main')
@section('content')

        <div class="container">
          <div class="center">
            <div class="col-sm-14">
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
                    <a class="btn btn-primary" href="#" role="button">Tambah Buku</a>
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
                                            <th>No</th>
                                            <th>Judul Buku</th>
                                            <th>gennre</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun</th>
                                            <th>Lihat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $anggota = [
                                            [
                                                "No" => "1",
                                                "Judul Buku" => "1234567",
                                                "Genre" => "ashis cahya maulana",
                                                "Pengarang" => "11",
                                                "Penerbit" => "rpl",
                                                "Tahun"=> "2000",

                                            ],
                                        ];

                                        ?>
                                        <tr>
                                            <?php foreach ($anggota as $angg) : ?>
                                                <td><?= $angg["No"]; ?></td>
                                                <td><?= $angg["Judul Buku"]; ?></td>
                                                <td><?= $angg["Genre"]; ?></td>
                                                <td><?= $angg["Pengarang"]; ?></td>
                                                <td><?= $angg["Penerbit"]; ?></td>
                                                <td><?= $angg["Tahun"]; ?></td>
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

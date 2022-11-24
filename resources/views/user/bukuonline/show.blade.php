<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tampilan Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-86308552-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- icon bootstrap -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
        integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="container">
    <div class="container">
        <div class="center">
            <div class="col-sm-6">
                <div class="page-header-title">
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <p></p>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Detail Buku</h3>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1 col-sm-8 col-md-2  ">
                                <div class="gambar">
                                    <img class="img-" src="/images/{{ $bukuonline->cover_buku }}" alt="">
                                </div>
                            </div>


                            <div class="col-11 col-sm-8 col-md-10">
                                <div class="text">
                                    <div class="judul-buku">{{ $bukuonline->judul_buku }}</div>
                                    <li>
                                        Genre:{{ $bukuonline->genre->name }}
                                    </li>
                                    <li>
                                        Pengarang:{{ $bukuonline->pengarang }}
                                    </li>
                                    <li>
                                        Penerbit:{{ $bukuonline->penerbit }}
                                    </li>
                                    <li>
                                        Tahun terbit:{{ $bukuonline->tahun_terbit }}
                                    </li>
                                    <li>
                                        @include('partials.rating_buku')
                                    </li>
                                    <div class="container">
                                        <h5>{!! $bukuonline->deskripsi !!}</h5>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                    </div>
                    <a href="{{ route('user.bukuonline') }}" class="btn btn-primary" style="margin: 5px;"><i
                            class="bi bi-box-arrow-left"></i> Kembali</a>
                    <a href="{{ route('user.bacaonline.baca', $bukuonline->id) }}" class="btn btn-success" style="margin: 5px;">Baca</a>
                </div>
            </div>
        </div>

        <!-- <footer class="footer"> 2016 - 2020 © Xadmino. </footer> -->

    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/pages/dashborad.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
<!-- Mirrored from themesdesign.in/xadmino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 13:58:35 GMT -->

</html>

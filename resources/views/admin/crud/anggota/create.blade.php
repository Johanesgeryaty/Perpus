<!DOCTYPE html>
<html>


<meta charset="utf-8" />
    <title>Tampilan Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap1.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons1.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet" type="text/css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <form action="{{ route('admin.anggota.buat') }}" method="POST">
        @csrf
        <div class="container">
            <div class="center">
                <div class="col-sm-6">
                    <div class="page-header-title">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <p></p>
            <!--  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Edit Data Anggota</h3>
                        </div>
                        <div class="panel-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama</label>
                                <input type="text " class="form-control " name="name"
                                    id="formGroupExampleInput" placeholder="Masukan Nama">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nis</label>
                                <input type="number" class="form-control" name="nisn"
                                    id="formGroupExampleInput2" placeholder="Masukan Nis">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    id="formGroupExampleInput2" placeholder="Masukan Nis">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas"
                                    id="formGroupExampleInput2" placeholder="Masukan Kelas">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan"
                                    id="formGroupExampleInput2" placeholder="Masukan Jurusan ">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Password</label>
                                <input type="Password" class="form-control" name="Password"
                                    id="formGroupExampleInput2" placeholder="Masukan Password ">
                            </div>
                            <br>
                            <div class="mb-3">
                                {{-- <label for="role" class="form-label">Role</label>
                                <select class="form-control" aria-label="Default select example" id="role"
                                    name="role">
                                    <option selected>
                                        role
                                    </option>
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                </select> --}}
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            <a href="{{ route('admin.anggota.index') }}" class="btn btn-primary btn-sm">Kembali</a>
    </form>
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

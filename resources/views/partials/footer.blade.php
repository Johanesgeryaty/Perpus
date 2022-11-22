<footer id="ereaders-footer" class="ereaders-footer-one" style="margin-top: 150px">
    <div class="ereaders-footer-widget">
        <div class="container">
            <div class="row" style="padding: 40px">
                <div class="col-md-12">
                    <div class="ereaders-footer-newslatter">
                        <h2 id="kotak_saran">Kotak Saran</h2>
                        <form action="{{ route('user.saran.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!--  -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <br>
                                            <div class="mb-3">
                                                <textarea name="isi_saran" class="form-control" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </form>
                    <a href="index-2.html" class="ereaders-footer-logo"><img src="images/footer-logo.png"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="ereaders-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <i class="fa fa-copyright"></i> 2022, All Right Reserved - by Alvin Raymond
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

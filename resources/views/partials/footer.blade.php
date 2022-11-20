
        <footer id="ereaders-footer" class="ereaders-footer-one">
            <div class="ereaders-footer-widget">
          <div class="container">
            <div class="row">
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
                                        {{-- <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Buku</label>
                                            <input type="file" class="form-control " name="gambar_buku" value=""
                                                id="formGroupExampleInput" placeholder="Masukan Nama">
                                        </div> --}}
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
                  <a href="index-2.html" class="ereaders-footer-logo"
                    ><img src="images/footer-logo.png" alt=""
                  /></a>
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
                                <i class="fa fa-copyright"></i> 2022, All Right Reserved - by
                                <a href="index-2.html">wacateam</a>
                            </p>
                            <ul class="footer-social-network">
                                <li>
                                    <a href="https://en-gb.facebook.com/login/" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/uas/login" class="fab fa-linkedin"></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/login?lang=en" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/login/" class="fab fa-pinterest-p"></a>
                                </li>
                                <li>
                                    <a href="https://en-gb.facebook.com/login/" class="fab fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



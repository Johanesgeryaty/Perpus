<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from eyecix.com/html/ereaders/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 02:53:40 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Wadah Baca</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" />
    <link href="css/flaticon.css" rel="stylesheet" />
    <link href="css/slick-slider.css" rel="stylesheet" />
    <link href="css/fancybox.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/color.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

  </head>
  <body>
    <div class="ereaders-main-wrapper">
        <header id="ereaders-header" class="ereaders-header-one">
          <div class="ereaders-main-header">
            <div class="container">
              <div class="row">
                <aside class="col-md-3">
                  <a href="#" class="logo">
                    <img src="images/waca.png" alt=""/></a>
                </aside>
                <aside class="col-md-9">
                  <a href="#menu" class="menu-link"><span></span></a>
                  <nav id="menu" class="menu navbar navbar-default">
                    <ul class="level-1 navbar-nav">
                      <li class="active"><a href="/">Beranda</a></li>
                      <li>
                        <a href="#buku_populer">Buku Populer</a
                        >
                      </li>
                      <li>
                        <a href="#kotak_saran">Kotak Saran</a>
                      </li>
                      <li>
                        <a href="tata-tertib.html">Tata Tertib</a
                        >
                    </li>
                  </ul>
                </nav>

                <a
                  href="{{ Route('login.index') }}"
                  class="ereaders-simple-btn ereaders-bgcolor"
                  >Masuk</a
                >
              </aside>
            </div>
          </div>
        </div>
      </header>

      <div class="ereaders-banner">
        <img src="{{asset('images/banner.png')}}" alt="">
      </div>

      <div class="ereaders-main-content ereaders-content-padding">
        <div class="ereaders-main-section ereaders-counterfull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

              </div>
            </div>
          </div>
        </div>

        <div class="ereaders-main-section ereaders-work-learnfull">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="ereaders-work-learn">
                  <h2>Apa itu <span>Wadah Baca?</span></h2>
                  <p>
                    Perkenalkan, <span style="color: rgb(56, 148, 247);">Wadah Baca</span>  merupakan perpustakaan digital berbasis web
                    yang bertujuan untuk jadi sebuah inovasi baru di era digital 4.0 dan memudahkan mengelola administrasi perpustakaan.</p>
                  <a
                    href="{{ route('login.index') }}"
                    class="ereaders-simple-btn ereaders-bgcolor"
                    >Daftar Sekarang! <i class="fa fa-angle-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ereaders-main-section ereaders-service-gridfull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-fancy-title" id="buku_populer">
                  <h2>Buku Populer </h2>
                  <div class="clearfix"></div>
                  <p>Buku yang sering dibaca oleh user
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
              </div>
            </div>
        </div>

      <footer id="ereaders-footer" class="ereaders-footer-one">

        <div class="ereaders-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p>
                  <i class="fa fa-copyright"></i> 2022, All Right Reserved - by
                  {{-- <a href="index-2.html">wacateam</a> --}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div class="clearfix"></div>
    </div>

    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/jquery-ui.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/fancybox.pack.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/progressbar.js"></script>
    <script
      type="text/javascript"
      src="script/jquery.countdown.min.js"
    ></script>
    <script type="text/javascript" src="script/circle-chart.js"></script>
    <script type="text/javascript" src="script/numscroller.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAs_m2ywm-bE8z9YM_WmtPaIQNIosN4Dxo&amp;callback=initMap"
    ></script>
    <script type="text/javascript" src="script/functions.js"></script>
  </body>

  <!-- Mirrored from eyecix.com/html/ereaders/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 02:54:57 GMT -->
</html>

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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                        ><span class="has-subnav"><i class="fa fa-angle-down"></i
                        ></span>
                      </li>
                      <li>
                        <a href="#kotak_saran">Kotak Saran</a
                        ><span class="has-subnav"
                          ><i class="fa fa-angle-down"></i
                        ></span>
                      </li>
                      <li>
                        <a href="tata-tertib.html">Tata Tertib</a
                        ><span class="has-subnav"
                          ><i class="fa fa-angle-down"></i
                      ></span>
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
        <div class="ereaders-banner-layer">
          <img src="extra-images/test.jpg" alt="" />
          <span class="ereaders-banner-transparent"></span>
          <div class="ereaders-banner-caption">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="ereaders-banner-text">
                    <h2>Baca Lebih <span>Mudah</span></h2>
                    <h3>Dengan gawai anda.</h3>
                    <p>
                      Quisque ultricies luctus nisi non dapibus. Nullam
                      efficitur lorem non libe blandit, non rhoncus libero
                      tristique.
                    </p>
                    <a href="{{ Route('login.index') }}"
                      class="ereaders-simple-btn ereaders-bgcolor">Ayo Baca Sekarang!</a>
                  </div>
                </div>`
                <div class="col-md-5">
                  <div class="ereaders-banner-thumb">
                    <img src="extra-images/tumb.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ereaders-main-content ereaders-content-padding">
        <div class="ereaders-main-section ereaders-counterfull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-counter">
                  <ul>
                    <li>
                      <div class="ereaders-counter-text">
                        <i class="icon ereaders-document"></i>
                        <div class="ereaders-scroller">
                          <h2
                            class="numscroller"
                            data-slno="1"
                            data-min="0"
                            data-max="1200"
                            data-delay="10"
                            data-increment="9">
                            1200
                          </h2>
                          <span>Pages</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ereaders-counter-text">
                        <i class="icon ereaders-book"></i>
                        <div class="ereaders-scroller">
                          <h2
                            class="numscroller"
                            data-slno="1"
                            data-min="0"
                            data-max="45"
                            data-delay="10"
                            data-increment="9"
                          >
                            45
                          </h2>
                          <span>Chapters</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ereaders-counter-text">
                        <i class="icon ereaders-download-content"></i>
                        <div class="ereaders-scroller">
                          <h2
                            class="numscroller"
                            data-slno="1"
                            data-min="0"
                            data-max="3550"
                            data-delay="10"
                            data-increment="9"
                          >
                            3550
                          </h2>
                          <span>Downloads</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                    tristique erat accumsan eros mattis aliquam. Praesent non
                    accumsan mauris, non maximus libero. Vestibulu scelerisque
                    enim turpis. Duis justo ante, aliquam ac tempus et, porta
                    vitae leo. Moi sed diam pharetra eros maximus porttitor et
                    in tellus.
                  </p>
                  <p>
                    Ut porta massa in risus maximus, eget sodales massa
                    malesuada. Fusce et neque aliquet, mollis tellus ut, rutrum
                    nunc.
                  </p>
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
                  <p>Large online bookstores offer used books for sale, too.Individuals wishing to sell their used Books
                  </p>
                </div>
                <div class="ereaders-main-content">
                  <div class="ereaders-main-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="ereaders-books ereaders-book-grid">
                            <ul class="row">
                              <li class="col-md-3">
                                <figure>
                                  <a href="book-detail.html"
                                    ><img src="extra-images/book-grid-img1.jpg" alt=""
                                  /></a>
                                  <figcaption>
                                    <a
                                      href="#"
                                      class="icon ereaders-link"
                                      data-toggle="tooltip"
                                      title="Add To Link"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-heart"
                                      data-toggle="tooltip"
                                      title="Add To Wishlist"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-reload"
                                      data-toggle="tooltip"
                                      title="Reload"
                                    ></a>
                                  </figcaption>
                                </figure>
                                <div class="ereaders-book-grid-text">
                                  <h2>
                                    <a href="book-detail.html">Tes Buku</a>
                                  </h2>
                                  <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                  <small>Lorem ipsum dolor</small>
                                  <a
                                    href="book-detail.html"
                                    class="ereaders-simple-btn ereaders-bgcolor"
                                    >Detail Buku</a
                                  >
                                </div>
                              </li>
                              <li class="col-md-3">
                                <figure>
                                  <a href="book-detail.html"
                                    ><img src="extra-images/book-grid-img7.jpg" alt=""
                                  /></a>
                                  <figcaption>
                                    <a
                                      href="#"
                                      class="icon ereaders-link"
                                      data-toggle="tooltip"
                                      title="Add To Link"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-heart"
                                      data-toggle="tooltip"
                                      title="Add To Wishlist"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-reload"
                                      data-toggle="tooltip"
                                      title="Reload"
                                    ></a>
                                  </figcaption>
                                </figure>
                                <div class="ereaders-book-grid-text">
                                  <h2>
                                    <a href="book-detail.html">Tes Buku</a>
                                  </h2>
                                  <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                  <small>Lorem ipsum dolor</small>
                                  <a
                                    href="book-detail.html"
                                    class="ereaders-simple-btn ereaders-bgcolor"
                                    >Detail Buku</a
                                  >
                                </div>
                              </li>
                              <li class="col-md-3">
                                <figure>
                                  <a href="book-detail.html"
                                    ><img src="extra-images/book-grid-img2.jpg" alt=""
                                  /></a>
                                  <figcaption>
                                    <a
                                      href="#"
                                      class="icon ereaders-link"
                                      data-toggle="tooltip"
                                      title="Add To Link"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-heart"
                                      data-toggle="tooltip"
                                      title="Add To Wishlist"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-reload"
                                      data-toggle="tooltip"
                                      title="Reload"
                                    ></a>
                                  </figcaption>
                                </figure>
                                <div class="ereaders-book-grid-text">
                                  <h2>
                                    <a href="book-detail.html">Tes Buku</a>
                                  </h2>
                                  <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                  <small>Lorem ipsum dolor</small>
                                  <a
                                    href="book-detail.html"
                                    class="ereaders-simple-btn ereaders-bgcolor"
                                    >Detail Buku</a
                                  >
                                </div>
                              </li>
                              <li class="col-md-3">
                                <figure>
                                  <a href="book-detail.html"
                                    ><img src="extra-images/book-grid-img3.jpg" alt=""
                                  /></a>
                                  <figcaption>
                                    <a
                                      href="#"
                                      class="icon ereaders-link"
                                      data-toggle="tooltip"
                                      title="Add To Link"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-heart"
                                      data-toggle="tooltip"
                                      title="Add To Wishlist"
                                    ></a>
                                    <a
                                      href="#"
                                      class="icon ereaders-reload"
                                      data-toggle="tooltip"
                                      title="Reload"
                                    ></a>
                                  </figcaption>
                                </figure>
                                <div class="ereaders-book-grid-text">
                                  <h2>
                                    <a href="book-detail.html">Tes Buku</a>
                                  </h2>
                                  <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
                                  <small>Lorem ipsum dolor</small>
                                  <a
                                    href="book-detail.html"
                                    class="ereaders-simple-btn ereaders-bgcolor"
                                    >Detail Buku</a
                                  >
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="ereaders-main-section ereaders-service-providefull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-fancy-title">
                  <h2>Course We Are Providing</h2>
                  <div class="clearfix"></div>
                  <p>
                    Large online bookstores offer used books for sale, too.
                    Individuals wishing to sell their used Books
                  </p>
                </div>
              </div>
              <aside class="col-md-4">
                <div class="ereaders-service-provide">
                  <h3><span>08</span> We Are Expert in Courses You Learn</h3>
                  <p>
                    Aenean porttitor mi at molestie maximus eti ph tri ique
                    viverra. Sed tristiqu rutru mattis ellen tesq ue ege sum
                    dolor sit amet.
                  </p>
                  <p>
                    Ut porta massa in risus maximus, eget sodale mas sa
                    malesuada. Fusce et neque aliquet, mo llis tel lus ut,
                    rutrum nunc.
                  </p>
                </div>
              </aside>
              <aside class="col-md-8">
                <div class="ereaders-service ereaders-service-list">
                  <ul class="row">
                    <li class="col-md-6">
                      <i class="icon ereaders-line-chart ereaders-color"></i>
                      <h5><a href="service.html">Chapter 1: Analytics</a></h5>
                      <p>
                        Ut porta massa in risus maximus, eget sodales mas sa
                        malesuada. Fusce et neque aliquet, mollis tell usut,
                        rutrum nunc.
                      </p>
                    </li>
                    <li class="col-md-6">
                      <i class="icon ereaders-photo-camera ereaders-color"></i>
                      <h5><a href="service.html">Chapter 1: Analytics</a></h5>
                      <p>
                        Ut porta massa in risus maximus, eget sodales mas sa
                        malesuada. Fusce et neque aliquet, mollis tell usut,
                        rutrum nunc.
                      </p>
                    </li>
                    <li class="col-md-6">
                      <i class="icon ereaders-earth-globe ereaders-color"></i>
                      <h5><a href="service.html">Chapter 1: Analytics</a></h5>
                      <p>
                        Ut porta massa in risus maximus, eget sodales mas sa
                        malesuada. Fusce et neque aliquet, mollis tell usut,
                        rutrum nunc.
                      </p>
                    </li>
                    <li class="col-md-6">
                      <i class="icon ereaders-email ereaders-color"></i>
                      <h5><a href="service.html">Chapter 1: Analytics</a></h5>
                      <p>
                        Ut porta massa in risus maximus, eget sodales mas sa
                        malesuada. Fusce et neque aliquet, mollis tell usut,
                        rutrum nunc.
                      </p>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div> -->

        {{-- <div class="ereaders-main-section ereaders-blog-gridfull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-fancy-title">
                  <h2>Our Latest News</h2>
                  <div class="clearfix"></div>
                  <p>
                    Large online bookstores offer used books for sale, too.
                    Individuals wishing to sell their used Books
                  </p>
                </div>
                <div class="ereaders-blog ereaders-blog-grid">
                  <ul class="row">
                    <li class="col-md-4">
                      <div class="ereaders-blog-grid-wrap">
                        <figure>
                          <a href="blog-detail.html"
                            ><img src="extra-images/blog-grid-img1.jpg" alt=""
                          /></a>
                        </figure>
                        <div class="ereaders-blog-grid-text">
                          <span>Business</span>
                          <h2>
                            <a href="blog-detail.html"
                              >Things you should know before pairing your --}}
                              {{-- home</a
                            >
                          </h2>
                          <ul class="ereaders-blog-option">
                            <li>21 August 2017</li>
                            <li><a href="404.html"> Comments 32</a></li>
                          </ul>
                          <p>
                            Nam ut egestas nibh. Phasellus sollicitudin tempus
                            neque quis gravida. Aenean a eros at ex pharetra
                            suscipit.
                          </p>
                          <a
                            href="blog-detail.html"
                            class="ereaders-readmore-btn"
                            >Read more <i class="fa fa-angle-double-right"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-4">
                      <div class="ereaders-blog-grid-wrap">
                        <figure>
                          <a href="blog-detail.html"
                            ><img src="extra-images/blog-grid-img2.jpg" alt=""
                          /></a>
                        </figure>
                        <div class="ereaders-blog-grid-text">
                          <span>Domain</span>
                          <h2>
                            <a href="blog-detail.html"
                              >consectetur adipiscing elit. Pra esent
                              accumsan</a
                            >
                          </h2>
                          <ul class="ereaders-blog-option">
                            <li>21 August 2017</li>
                            <li><a href="404.html"> Comments 32</a></li>
                          </ul>
                          <p>
                            Lorem ipsum dolor sit amet, consectetu ad piscing
                            elit. Praesent accumsan sit amet risus sed auctor.
                          </p>
                          <a
                            href="blog-detail.html"
                            class="ereaders-readmore-btn"
                            >Read more <i class="fa fa-angle-double-right"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-4">
                      <div class="ereaders-blog-grid-wrap">
                        <figure>
                          <a href="blog-detail.html"
                            ><img src="extra-images/blog-grid-img3.jpg" alt=""
                          /></a>
                        </figure>
                        <div class="ereaders-blog-grid-text">
                          <span>Keywords</span>
                          <h2>
                            <a href="blog-detail.html"
                              >Ut non imperdiet quam Nullam sed lacus ut mi
                              ornare</a
                            >
                          </h2>
                          <ul class="ereaders-blog-option">
                            <li>21 August 2017</li>
                            <li><a href="404.html"> Comments 32</a></li>
                          </ul>
                          <p>
                            Nullam sed lacus ut mi ornare consectetur id sed
                            urna. Praesent vestibulum eget ante nec semper.
                          </p>
                          <a
                            href="blog-detail.html"
                            class="ereaders-readmore-btn"
                            >Read more <i class="fa fa-angle-double-right"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        <!-- <div class="ereaders-main-section">
          <div class="container">
            <div class="row">
              <aside class="col-md-6">
                <div class="ereaders-author-thumb">
                  <img src="extra-images/about-author-img.jpg" alt="" />
                </div>
              </aside>
              <aside class="col-md-6">
                <div class="ereaders-author-text">
                  <h2>About the <span>Author</span></h2>
                  <h5>
                    Do you want to be even more successful? Learn to love learn
                    and growth. The more efort you put into improving your
                    skills, the bigger the payoff you will get.
                  </h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent accusa sit amet risus sed auctor. Ut non imperdiet
                    quam. Nullam sed lacus ut mior nare consectetur id sed urna.
                    Praesent vestibulum eget ant nec seper ull corper sodales
                    tortor vel mattis.
                  </p>
                  <p>
                    Nam ut egestas nibh. Phasellus sollicitudin tempus neque
                    quis gravida. Aenean a eros at ex pharetra suscipit. Proin
                    iaculis ipsum ac ullamcorper pre tium. Morbi ut leo eu felis
                    commodo porta.
                  </p>
                  <img src="images/signature.png" alt="" />
                  <ul class="ereaders-author-social">
                    <li>
                      <a
                        href="https://en-gb.facebook.com/login/"
                        class="fa fa-facebook"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://twitter.com/login?lang=en"
                        class="fa fa-twitter"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.pinterest.com/login/"
                        class="fa fa-pinterest-p"
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://en-gb.facebook.com/login/"
                        class="fa fa-google-plus"
                      ></a>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div> -->

        <!-- <div class="ereaders-main-section ereaders-testimonialfull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-testimonial">
                  <div class="ereaders-testimonial-wrap">
                    <div class="ereaders-fancy-title">
                      <h2>What People say</h2>
                    </div>
                    <div class="ereaders-testimonial-slide">
                      <div class="ereaders-testimonial-slide-layer">
                        <figure>
                          <img src="extra-images/testimonial-img1.jpg" alt="" />
                        </figure>
                        <div class="ereaders-testimonial-text">
                          <h4><a href="404.html">Ryan Pittman</a></h4>
                          <span>Fashion Designer</span>
                          <p>
                            “Ut porta massa in risus maximus, egets oda les
                            massa malesuada. Fusce et neq ue aliq uet, mollis
                            tellus ut, rutrum nunc. Cras congue ma gna”
                          </p>
                        </div>
                      </div>
                      <div class="ereaders-testimonial-slide-layer">
                        <figure>
                          <img src="extra-images/testimonial-img2.jpg" alt="" />
                        </figure>
                        <div class="ereaders-testimonial-text">
                          <h4><a href="404.html">Ryan Pittman</a></h4>
                          <span>Fashion Designer</span>
                          <p>
                            “Ut porta massa in risus maximus, egets oda les
                            massa malesuada. Fusce et neq ue aliq uet, mollis
                            tellus ut, rutrum nunc. Cras congue ma gna”
                          </p>
                        </div>
                      </div>
                      <div class="ereaders-testimonial-slide-layer">
                        <figure>
                          <img src="extra-images/testimonial-img3.jpg" alt="" />
                        </figure>
                        <div class="ereaders-testimonial-text">
                          <h4><a href="404.html">Ryan Pittman</a></h4>
                          <span>Fashion Designer</span>
                          <p>
                            “Ut porta massa in risus maximus, egets oda les
                            massa malesuada. Fusce et neq ue aliq uet, mollis
                            tellus ut, rutrum nunc. Cras congue ma gna”
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <div class="ereaders-main-section ereaders-app-sectionfull">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-fancy-title">
                  <h2>Read It In All Devices</h2>
                  <div class="clearfix"></div>
                  <p>
                    Large online bookstores offer used books for sale, too.
                    Individuals wishing to sell their used Books
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="ereaders-app-text">
                  <h5>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    aesent accumsan sit amet risus sed auctor.
                  </h5>
                  <p>
                    Aenean ultricies iaculis cursus. Mauris enim tellus, finibus
                    in felis sollicitu din iaculis dolor. Donec sollicitudin
                    orci id efficitur dapibus. Aliq uamtem por ien sed
                    condimentum fringilla. In magna elit, ultrices a eros it
                    amet, iaculis hendrerit tellusn iaculis nisi, nec maximus
                    lorem.
                  </p>
                  <p>
                    Nam ut egestas nibh. Phasellus sollicitudin tempus neque
                    quis gravida. Aenean a eros at ex pharetra suscipit.
                  </p>
                  <a href="404.html" class="ereaders-fancy-btn"
                    ><i class="icon ereaders-apple-logo"></i>
                    <span
                      ><small>Download on the</small><br />
                      App Store</span
                    ></a
                  >
                  <a href="404.html" class="ereaders-fancy-btn"
                    ><i class="icon ereaders-play-store"></i>
                    <span
                      ><small>GET IT ON</small><br />
                      GooglePlay</span
                    ></a
                  >
                </div>
              </div>
              <div class="col-md-6">
                <div class="ereaders-app-thumb">
                  <img src="extra-images/app-thumb.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <footer id="ereaders-footer" class="ereaders-footer-one">
        <div class="ereaders-footer-widget">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ereaders-footer-newslatter">
                  <h2 id="kotak_saran">Kotak Saran</h2>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Masukkan Teks" id="floatingTextarea2" style="height: 100px"></textarea> <br>
                    <button type="button" class="btn btn-primary" style="float:right">Kirim</button>
                  </div> <br>
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
                    <a
                      href="https://en-gb.facebook.com/login/"
                      class="fab fa-facebook"
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.linkedin.com/uas/login"
                      class="fab fa-linkedin"
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://twitter.com/login?lang=en"
                      class="fab fa-twitter"
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://www.pinterest.com/login/"
                      class="fab fa-pinterest-p"
                    ></a>
                  </li>
                  <li>
                    <a
                      href="https://en-gb.facebook.com/login/"
                      class="fab fa-google-plus"
                    ></a>
                  </li>
                </ul>
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

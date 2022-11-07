@extends('layouts.app')

@section('content')

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
    

    
@endsection
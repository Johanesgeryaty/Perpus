<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard-user</title>
    <link rel="stylesheet" href="{{asset('/cssuser/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/cssuser/all.min.css')}}">

  </head>
  <style>
    a {
      text-decoration: none;
    }
  </style>
  <body>
    <div class="container">
      
    </div>
    <nav class="navbar navbar-expand-lg bg-primary ms-auto" >
      <div class="container">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-white">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container">
        <div class="row">
            <div class="col-lg-1 ">
                <img src="/images/login2.jpg" class="mt-3" style="width: 100px;" alt=""> 
            </div>
            <div class="col-lg-11 mt-2 pt-3">
                <h2 class="fw-bold">JOHANES GERYATY PUTRI</h2>
                <h5>10 RPL 1</h5>
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
          <div class="col">
            <div class="card text-bg-warning text-white">
              <div class="card-body">
                <i class="fa-solid fa-pen-to-square"></i>
                <h5><a href="" class="text-white">Edit Profil</a></h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-primary">
              <div class="card-body">
                <i class="fa-solid fa-clock"></i>
                <h5><a href="" class="text-white">Riwayat Pinjam</a></h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-success">
              <div class="card-body">
                <i class="fa-solid fa-clock"></i>
                <h5><a href="" class="text-white">Riwayat Baca</a></h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-danger">
              <div class="card-body">
                <i class="fa-solid fa-bookmark"></i>
                <h5><a href="" class="text-white">Wishlist</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="/jsuser/bootstrap.min.js"></script>
    <script src="/jsuser/all.min.js"></script>
  </body>
</html>

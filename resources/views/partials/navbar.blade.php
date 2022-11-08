<div id="wrapper">
  <div class="topbar">
      <div class="topbar-left">
          <div class="text-center" style="background-color: #242323;"> <a href="index.html" class="logo"><img src="/assets/images/logo_white_2.png"
                      height="50"></a> <a href="index.html" class="logo-sm"><img src="/assets/images/logo-nv.png"
                      height="60"></a></div>
      </div>
      <div class="navbar navbar-default" role="navigation">
          <div class="container" style="background-color:blue;">
              <div class="">
                  <div class="pull-left"> <button type="button"
                          class="button-menu-mobile open-left waves-effect waves-light"> <i
                              class="ion-navicon"></i> </button> <span class="clearfix"></span></div>
              </div>
              <a class="btn btn-danger" style="margin-top: 20px; float:right; border-radius: 5px;" href="{{ Route('logout.perform') }}" role="button">Logout</a>
          </div>
      </div>
  </div>
  <div class="left side-menu">
      <div class="sidebar-inner slimscrollleft" style="background-color: #242323;">
          <div class="user-details">
              <div class="text-center" style="background-color: #242323;"> <img src="/assets/images/users/avatar-1.jpg" alt="" class="img-circle">
              </div>
              <div class="user-info">
                  <div class="dropdown"> <a href="profile.html" class="dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">{{ Auth::user()->name }}</a>
                  </div>
              </div>
          </div>
          <!-- navbar awal -->
          <div id="sidebar-menu" style="background-color: #242323 ;">
              <ul>
                  <li> <a style="background-color: #242323;" href="{{ Route('user.dashboard') }}" class="{{ ($title === 'dashboard') ? 'active':'' }} waves-effect"><i class="ti-home"></i><span> Dashboard
                          </span></a></li>
                  <li> <a style="background-color: #242323;" href="{{ Route('user.bukuonline') }}" class="{{ ($title === 'data-buku-online     ') ? 'active':'' }} waves-effect"><i class="bi bi-pencil-square"></i>
                          Buku Online</a></li>
                  <li> <a style="background-color: #242323;" href="{{ Route('user.bukuoffline') }}" class="{{ ($title === 'data-buku-offline') ? 'active':'' }}" class="waves-effect"><i class="bi bi-pencil-square"></i>
                          Buku Offline</a></li>
                  <li> <a style="background-color: #242323;" href="{{ Route('user.historypinjam') }}"><i class="ti-ruler-pencil waves-effect"></i>
                          History Pinjam</a></li>
                  <li > <a style="background-color: #242323;" href="{{ Route('user.saran') }}" class="{{ ($title === 'kotak-saran') ? 'active':'' }}" class="waves-effect"><i class="bi bi-envelope"></i>
                          Saran</a></li>
                  <li> <a style="background-color: #242323;" href="{{ Route('user.whislist') }}" class="{{ ($title === 'kotak-saran') ? 'active':'' }}" class="waves-effect"><i class="bi bi-envelope"></i>
                          Whislist</a></li>
                  {{-- <li> <a style="background-color: #242323;" href="{{ Route('logout.perform') }}" class="{{ ($title === 'data-buku-offline     ') ? 'active':'' }}" class="waves-effect"><i class="bi bi-envelope"></i>
                          Logout</a></li> --}}
              </ul>
          </div>  <div class="clearfix"></div>
  </div>
</div>




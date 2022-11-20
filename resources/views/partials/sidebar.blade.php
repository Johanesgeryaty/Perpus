<div id="wrapper">
    <div class="topbar">
        <div class="topbar-left">
            <div class="text-center"> <a href="index.html" class="logo"><img src="/assets/images/logo_white_2.png"
                        height="50"></a> <a href="index.html" class="logo-sm"><img src="/assets/images/logo_sm.png"
                        height="60"></a></div>
        </div>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left"> <button type="button"
                            class="button-menu-mobile open-left waves-effect waves-light"> <i class="ion-navicon"></i>
                        </button> <span class="clearfix"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="user-details">
                <div class="text-center"> <img src="/assets/images/users/avatar-1.jpg" alt=""
                        class="img-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown"> <a href="profile.html" class="dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }}</a>
                    </div>
                </div>
            </div>
            <!-- navbar awal -->
            <div id="sidebar-menu">
                <ul>
                    <li> <a href="{{ Route('admin.dashboard') }}"
                            class="{{ $title === 'dashboard' ? 'active' : '' }} waves-effect"><i
                                class="ti-home"></i><span> Dashboard
                            </span></a></li>
                    <li> <a href="{{ Route('admin.anggota.index') }}"
                            class="{{ $title === 'daftar-anggota' ? 'active' : '' }} waves-effect"><i
                                class="bi bi-person-square"></i>
                            Data Anggota</a></li>
                    <li> <a href="{{ Route('admin.bukuonline.index') }}"
                            class="{{ $title === 'bukuonline' ? 'active' : '' }} waves-effect"><i
                                class="bi bi-pencil-square"></i>
                            Data Buku Online</a></li>
                    <li> <a href="{{ Route('admin.bukuoffline.index') }}"
                            class="{{ $title === 'bukuoffline' ? 'active' : '' }}" class="waves-effect"><i
                                class="bi bi-pencil-square"></i>
                            Data Buku Offline</a></li>
                    <li> <a href="{{ Route('admin.transaksi.index') }}"
                             class="{{ $title === 'transaksi' ? 'active' : '' }} waves-effect"><i
                                class="bi bi-person-square"></i>
                             transaksi</a></li>
                    <li> <a href="{{ Route('admin.kotak-saran') }}"
                            class="{{ $title === 'kotak-saran' ? 'active' : '' }}" class="waves-effect"><i
                                class="bi bi-envelope"></i>
                            Kotak Saran</a></li>
                    <li> <a href="{{ Route('logout.perform') }}"
                            class="{{ $title === 'data-buku-offline     ' ? 'active' : '' }}" class="waves-effect"><i
                                class="bi bi-envelope"></i>
                            Logout</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
                <!-- navbar awal -->
                <div id="sidebar-menu">
                    <ul>
                        <li> <a href="{{ Route('admin.dashboard') }}" class="{{ ($title === 'dashboard') ? 'active':'' }} waves-effect"><i class="ti-home"></i><span> Dashboard
                                </span></a></li>
                        <li> <a href="{{ Route('admin.anggota.index') }}" class="{{ ($title === 'daftar-anggota') ? 'active':'' }} waves-effect"><i class="bi bi-person-square"></i>
                                Data Anggota</a></li>
                        <li> <a href="{{ Route('admin.bukuonline.index') }}" class="{{ ($title === 'bukuonline') ? 'active':'' }} waves-effect"><i class="bi bi-pencil-square"></i>
                                Data Buku Online</a></li>
                        <li> <a href="{{ Route('admin.bukuoffline.index') }}" class="{{ ($title === 'bukuoffline') ? 'active':'' }}" class="waves-effect"><i class="bi bi-pencil-square"></i>
                                Data Buku Offline</a></li>
                        <li> <a href="{{ Route('admin.transaksi.index') }}" class="{{ ($title === 'transaksi') ? 'active':'' }} waves-effect"><i class="bi bi-pencil-square"></i>
                                Transaksi</a></li>
                        <li> <a href="{{ route('admin.transaksi') }}" class="{{ ($title === 'transaksi') ? 'active':'' }}" ><i class="ti-ruler-pencil waves-effect"></i>
                                Transaksi Pinjam</a></li>
                        <li> <a href="{{ Route('admin.kotak-saran') }}" class="{{ ($title === 'kotak-saran') ? 'active':'' }}" class="waves-effect"><i class="bi bi-envelope"></i>
                                Kotak Saran</a></li>
                        <li> <a href="{{ Route('logout.perform') }}" class="{{ ($title === 'data-buku-offline     ') ? 'active':'' }}" class="waves-effect"><i class="bi bi-envelope"></i>
                                Logout</a></li>
                    </ul>
                </div>  <div class="clearfix"></div>
        </div>
    </div>

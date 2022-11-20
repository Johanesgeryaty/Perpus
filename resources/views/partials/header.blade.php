
        <header id="ereaders-header" class="ereaders-header-one">
            <div class="ereaders-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2">
                            <a href="#" class="logo">
                                <img src="{{asset('images/waca.png')}}" alt="" /></a>
                        </aside>
                        <aside class="col-md-10">
                            <a href="#menu" class="menu-link"><span></span></a>
                            <nav id="menu" class="menu navbar navbar-default">
                                <ul class="level-1 navbar-nav">
                                    <li><a href="{{ Route('user.dashboard') }}" class="{{ $title === 'dashboard' ? 'active':'' }} waves-effect">Dashboard</a></li>
                                    <li>
                                        <a href="{{ Route('user.bukuonline') }}" class="{{ $title === 'bukuonline' ? 'active' : '' }} waves-effect">Buku Online</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('user.bukuoffline') }}" class="{{ $title === 'bukuoffline' ? 'active':'' }} waves-effect">Buku Offline</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('user.historypinjam') }}" class="{{ $title === 'transaksi' ? 'active':'' }} waves-effect">Histori Pinjam</a>
                                    </li>

                                        <a href="{{ Route('logout.perform') }}" class="btn btn-danger btn-sm text-right">Logout</a>


                                </ul>
                            </nav>
                        </aside>
                    </div>
                </div>
            </div>
        </header>





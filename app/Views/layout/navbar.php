<!-- Navbar -->

        <nav class="row navbar navbar-expand-lg navbar-light " style="background-color: #4A9AF9;">
           <div class="container">
             <a href="/" class="navbar-brand">
                <img src="img/gunadarma.png" alt="Logo kursus">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="/" class="nav-link <?= $status_index; ?>">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="/jadwal" class="nav-link <?= $status_jadwal; ?>">Jadwal Kursus</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="/daftar" class="nav-link <?= $status_daftar; ?>">Daftar Kursus</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="/tentang" class="nav-link <?= $status_about; ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="/admin" class="nav-link <?= $status_admin; ?>">Admin</a>
                    </li>
                </ul>
                <!--Mobile Button-->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login  my-2 my-sm-0 ">
                        Masuk
                    </button>
                </form>
                <!--Desktop Button-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
            </div>
           </div>
        </nav>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-2">
    <div class="container align-items-center">
        <a class="navbar-brand fw-bold" href="/"><img src="{{ asset('assets/img/logo/LogoOiru.png') }}" alt="logo-navbar" width="120"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav pt-3 pt-md-0 ms-4 gap-2">
                <a class="nav-link active btn-hover rounded my-2 my-md-0 {{ Request::is('/') ? 'btn-active' : '' }}" href="/">Beranda</a>
                <div class="dropdown mb-2 mb-md-0">
                    <a class="nav-link active btn-hover rounded dropdown-toggle w-100 {{ Request::is('penukaran-sampah','penukaran-sampah/*','sembako','sembako/*') ? 'btn-active' : '' }}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Penukaran
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ Route('penukaran-sampah') }}">🧴 Jelantah</a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link active btn-hover rounded mb-2 mb-md-0 {{ Request::is('prosedur') ? 'btn-active' : '' }}" href="/prosedur">Prosedur</a>
                <div class="dropdown mb-2 mb-md-0">
                    <a class="nav-link active btn-hover rounded dropdown-toggle w-100 {{ Request::is('about', 'visi-misi', 'our-team') ? 'btn-active' : '' }}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="/about">Overview</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/visi-misi">Visi & Misi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/our_team">Our Team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="navbar-nav ms-auto gap-2 btn-auth">
                @guest
                    <a class="nav-link active btn btn-hover {{ Request::is('register','register/*') ? 'btn-active' : '' }}" href="{{ Route('register') }}">Register</a>
                    <a class="nav-link text-white btn barter-bage-color px-4" href="{{ Route('login') }}">Login</a>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link active btn-hover rounded dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{ Auth::user()->name }} !
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->isAdmin == true)
                                <li><a class="dropdown-item" href="{{ Route('admin') }}">Dashboard</a></li>
                                <li>
                                    <form action="{{ Route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ Route('user') }}">Dashboard</a></li>
                                <hr class="dropdown-divider">
                                <li>
                                    <form action="{{ Route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endguest
            </div>
        </div>
    </div>
</nav>
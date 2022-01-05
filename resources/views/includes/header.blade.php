<nav class="navbar navbar-expand-md navbar-light bg-transparant border-bottom py-2">
    <div class="container align-items-center">
        <a class="navbar-brand fw-bold" href="/"><img src="{{ asset('assets/img/logo/barter-bage-horizontal.svg') }}" alt="logo-navbar" width="180"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-4 gap-2">
                <a class="nav-link active btn btn-hover" href="/">Beranda</a>
                <a class="nav-link active btn btn-hover {{ Request::is('tukar-sampah','tukar-sampah/*') ? 'btn-active' : '' }}" href="tukar-sampah">Penukaran</a>
                <a class="nav-link active btn btn-hover {{ Request::is('tukar-sembako','tukar-sembako/*') ? 'btn-active' : '' }}" href="tukar-sembako">Sembako</a>
                <a class="nav-link active btn btn-hover" href="#">Artikel</a>
            </div>
            <hr>
            <div class="navbar-nav ms-auto gap-2 btn-auth">
                <a class="nav-link active btn btn-hover px-4 {{ Request::is('register','register/*') ? 'btn-active' : '' }}" href="register">Register</a>
                <a class="nav-link text-white btn barter-bage-color px-4" href="login">Login</a>
            </div>
        </div>
    </div>
</nav>
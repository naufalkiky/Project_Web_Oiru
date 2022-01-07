<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom py-3">
    <div class="container align-items-center">
        <a class="navbar-brand fw-bold" href="{{ Route('admin') }}">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <span class="nav-link active me-3">Halo, {{ Auth::user()->name }}</span>
                <form action="{{ Route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
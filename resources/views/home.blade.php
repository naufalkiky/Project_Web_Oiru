@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- top home --}}
    <div class="row align-items-center justify-content-between mb-5">
        <div class="col-md-7">
            <h1 class="title-cta mb-3">Tukar Sampah, Dapat <span>Sembako</span></h1>
            <p class="lh-lg mb-4">Kami hadir sebagai platform penukaran sampah online pertama di Indonesia dilengkapi dengan daftar sembako yang dapat ditukarkan dengan BagePoints hasil penukaran sampah.</p>
            <a class="btn barter-bage-color text-white py-3 px-4 rounded-lg fw-bold" href="{{ Route('penukaran-sampah') }}">Tukar Sampah Sekarang</a>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
        </div>
    </div>

    {{-- carousel --}}
    <div class="pt-5 mb-2 border-top">
        <div id="carouselBarterBage" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBarterBage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBarterBage" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBarterBage" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-bs-interval="5000">
                <div class="carousel-item active">
                    <div class="gambarBg" style="background-image: url({{ asset('assets/img/logo/barter-bage.png') }})"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fw-bold">Kami Ada Untuk Anda</h5>
                        <p class="">Solusi bagi menumpuknya sampah di lingkungan kita</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="gambarBg" style="background-image: url(https://www.osteourgence.fr/templates/yootheme/cache/can-3489894_1920-5c44e6d5.jpeg)"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fw-bold">Mari Kita Bersatu</h5>
                        <p class="">Wujudkan Indonesia Bersih, Indonesia Sejahtera</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="gambarBg" style="background-image: url(https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/07/d8651ef32d625b3401f21b0db91598ad.jpg)"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fw-bold">Jangan Nyampah !</h5>
                        <p class="">Demi masa depan yang cerah</p>
                    </div>
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBarterBage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBarterBage" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>

    {{-- middle home --}}
    <div class="pt-5 mb-5">
        <div class="row align-items-center align-content-center">
            <div class="text-center fw-bold text-statistic">BarterBage adalah jalan terbaik bagi anda untuk menjaga lingkungan dengan</div>
            <div class="text-center fw-bold text-statistic barter-bage-color-text mb-3 mb-md-5">berperan dalam menanggulangi penumpukan sampah.</div>
        </div>
        <div class="row align-items-center align-content-center mb-5">
            <div class="col-12 col-md-3 text-center p-0">
                <h1 class="fw-bold barter-bage-color-text"> <img class="mb-2" src="/assets/img/icon/indo.png" alt="" width="100"> 100%</h1>
                <p>Daerah Indonesia terjangkau</p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h1 class="fw-bold barter-bage-color-text"> <img class="mb-2" src="/assets/img/icon/user.png" alt="" width="40"> {{ $total_users }}+</h1>
                <p>Pengguna aktif</p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h1 class="fw-bold barter-bage-color-text"> <img class="mb-2" src="/assets/img/icon/trash.png" alt="" width="30"> {{ $total_weight }}+</h1>
                <p>Kilogram sampah ditukarkan</p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h1 class="fw-bold barter-bage-color-text"> <img class="mb-2" src="/assets/img/icon/pac.png" alt="" width="40"> {{ $total_groceries }}+</h1>
                <p>Paket sembako tersedia</p>
            </div>
        </div>
    </div>

    {{-- middle home 2 --}}
    <div class="pt-5 mb-4 border-top">
        <div class="row">
            <div class="col-12 mb-5">
                <h3 class="text-center fw-bold mb-3">Mengapa <span class="barter-bage-color-text">BarterBage</span>?</h3>
                <div class="text-center">Tidak hanya menyediakan layanan online untuk penukaran sampah,</div> 
                <div class="text-center">BarterBage juga memiliki perbedaan unik dari platform lainnya khusus untuk anda.</div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-sm-4 text-center p-4">
                <img class="mb-2" src="/assets/img/icon/sandclock.png" alt="" width="35">
                <h5 class="fw-bold barter-bage-color-text">Tukar Cepat</h5>
                <p>Penukaran sampah diproses dengan cepat oleh admin kami untuk pengalaman terbaik anda.</p>
            </div>
            <div class="col-12 col-sm-4 text-center p-4">
                <img class="mb-3" src="/assets/img/icon/coin.png" alt="" width="40">
                <h5 class="fw-bold barter-bage-color-text">Bage Points</h5>
                <p>Hasil penukaran berupa point yang dapat digunakan untuk ditukarkan dengan paket sembako yang tersedia.</p>
            </div>
            <div class="col-12 col-sm-4 text-center p-4">
                <img class="mb-4" src="/assets/img/icon/truck.png" alt="" width="95">
                <h5 class="fw-bold barter-bage-color-text">Bank Sampah</h5>
                <p>Terintegrasi dengan bank sampah terdekat untuk pendistribusian maupun pengelolaan sampah.</p>
            </div>
        </div>
    </div>

    {{-- middle home 3 --}}
    <div class="py-5 border-top">
        <div class="col-12 mb-4">
            <h3 class="text-center fw-bold">Perjalanan Kami</h3>
        </div>
        <div class="card mb-5">
            <img src="/assets/img/images/tambahan home 2.jpg" class="card-img-top" alt="groceries-image">
            <div class="card-body">
                <h2 class="fw-bold barter-bage-color-text">Perjalanan Untuk Dekade Selanjutnya...</h2>
                <br>
                <p class="card-text">Berkomitmen untuk menciptakan kesadaran akan lingkungan yang lebih bersih dan sehat.<br>
                    Kini kami berupaya untuk menciptakan kesadaran tersebut keseluruh penjuru daerah.<br>
                    Dengan misi ini, BarterBage dapat menyatukan kekuatan akan pentingnya kesadaran lingkungan dan manfaat yang diberikan bagi perekonomian masyarakat sekitar.</p>
            </div>
        </div>
    </div>

    {{-- middle home 4 --}}
    <div class="dashboard-jumbotron py-3 rounded">
        <div class="container p-5">
            <h4 class="text-white fw-bold">Apa yang perlu kami bantu?</h4>
            <p class="mb-4 text-white">Tanyakan seputar layanan, informasi, saran dan hal lainnya supaya anda bisa jadi lebih paham.</p>
            <a class="btn barter-bage-color-text" style="background-color: #A0C570" href="https://linktr.ee/aniko2001" target="_blank">Tanya sesuatu</a>
        </div>
    </div>
@endsection

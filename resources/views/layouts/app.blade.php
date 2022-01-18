<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title') | BarterBage</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logo/title-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <style>
        .carousel-item{
            height: 400px;
            position: relative;
            background: rgb(0, 0, 0);
            color: white;
        }
        .gambarBg{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top:0;
            background-position: center;
            background-size: cover;
            opacity: 0.8;
        }
    </style>

</head>
<body class="d-flex flex-column min-vh-100">
    @include('includes.header')
            <div id="carouselBarterBage" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselBarterBage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselBarterBage" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselBarterBage" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner" data-bs-interval="5000">
                    <div class="carousel-item active">
                        <div class="gambarBg" style="background-image: url(https://images.pexels.com/photos/10892252/pexels-photo-10892252.png?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kami Ada Untuk Anda</h5>
                            <p>Solusi bagi menumpuknya sampah di lingkungan kita</p>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="gambarBg" style="background-image: url(https://www.osteourgence.fr/templates/yootheme/cache/can-3489894_1920-5c44e6d5.jpeg)"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mari Kita Bersatu</h5>
                            <p>Wujudkan Indonesia Bersih, Indonesia Sejahtera</p>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="gambarBg" style="background-image: url(https://disk.mediaindonesia.com/thumbs/1800x1200/news/2019/07/d8651ef32d625b3401f21b0db91598ad.jpg)"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Jangan Nyampah !</h5>
                            <p>Demi masa depan yang cerah</p>
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
    <div class="container mt-3 mx-auto py-3 mb-5">
        @yield('content')
    </div>

    @include('includes.footer')

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
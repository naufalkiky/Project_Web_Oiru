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
        <div class="col-md-7 mb-2 mb-md-4">
            <h1 class="title-cta mb-2">Tukar Sampah, Dapat <span>Sembako</span></h1>
            <p class="lh-lg mb-4">Kami hadir sebagai platform penukaran sampah online pertama di Indonesia dilengkapi dengan daftar sembako yang dapat ditukarkan dengan BagePoints hasil penukaran sampah.</p>
            <a class="btn barter-bage-color text-white px-5 rounded fw-bold" style="padding-bottom: 10px; padding-top: 10px;" href="{{ Route('penukaran-sampah') }}">Tukar Sampah</a>
        </div>
        <div class="col-md-5 mb-2 mb-md-4">
            <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
        </div>
    </div>

    {{-- middle home 1 --}}
    <div class="pt-5 mb-5 border-top">
        <div class="row align-items-center align-content-center">
            <div class="text-center fw-bold text-statistic">BarterBage adalah jalan terbaik bagi anda untuk menjaga lingkungan dengan</div>
            <div class="text-center fw-bold text-statistic barter-bage-color-text mb-3 mb-md-5">berperan dalam menanggulangi penumpukan sampah.</div>
        </div>
        <div class="row align-items-center align-content-center mb-5">
            <div class="col-12 col-md-3 text-center p-0">
                <h1 class="fw-bold barter-bage-color-text">100%</h1>
                <p>Daerah Indonesia terjangkau</p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h1 class="fw-bold barter-bage-color-text">{{ $total_users }}+</h1>
                <p>Pengguna aktif</p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h1 class="fw-bold barter-bage-color-text">{{ $total_weight }}+</h1>
                <p>Kilogram sampah ditukarkan</p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h1 class="fw-bold barter-bage-color-text">{{ $total_groceries }}+</h1>
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
    <div class="py-5 mb-5 border-top">
        <div class="row">
            <div class="col-12 mb-4">
                <h3 class="text-center fw-bold mb-3">Langkah mudah menggunakan <span class="barter-bage-color-text">BarterBage</span></h3>
                <div class="text-center">Untuk pengalaman terbaik anda, kami memberikan cara mudah</div> 
                <div class="text-center">untuk menggunakan fitur andalan dari BarterBage.</div>
            </div>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="container p-2">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn-active-tabs active" id="pills-tukar-sampah-tab" data-bs-toggle="pill" data-bs-target="#pills-tukar-sampah" type="button" role="tab" aria-controls="pills-tukar-sampah" aria-selected="true">Penukaran Sampah</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn-active-tabs" id="pills-tukar-sembako-tab" data-bs-toggle="pill" data-bs-target="#pills-tukar-sembako" type="button" role="tab" aria-controls="pills-tukar-sembako" aria-selected="false">Penukaran Sembako</button>
                    </li>
                </ul>
            </div>
            <div class="container border rounded p-4">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-tukar-sampah" role="tabpanel" aria-labelledby="pills-tukar-sampah-tab">...</div>
                    <div class="tab-pane fade" id="pills-tukar-sembako" role="tabpanel" aria-labelledby="pills-tukar-sembako-tab">...</div>
                </div>
            </div>
        </div>
    </div>
@endsection
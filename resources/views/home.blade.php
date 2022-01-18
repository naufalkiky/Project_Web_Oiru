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

{{-- middle home --}}
<div class="py-5 mb-5 border-top">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center mb-5 fw-bold">Mengapa BarterBage?</h3>
        </div>
    </div>
    <div class="row justify-content-between mb-5">
        <div class="col-12 col-sm-4 text-center p-4 mb-0 mb-sm-5">
            <img class="mb-2" src="/assets/img/icon/sandclock.png" alt="" width="35">
            <h5 class="fw-bold barter-bage-color-text">Tukar Cepat</h5>
            <p>Penukaran sampah diproses dengan cepat oleh admin kami untuk pengalaman terbaik anda.</p>
        </div>
        <div class="col-12 col-sm-4 text-center p-4 mb-0 mb-sm-5">
            <img class="mb-3" src="/assets/img/icon/coin.png" alt="" width="40">
            <h5 class="fw-bold barter-bage-color-text">Bage Points</h5>
            <p>Hasil penukaran berupa point yang dapat digunakan untuk ditukarkan dengan paket sembako yang tersedia.</p>
        </div>
        <div class="col-12 col-sm-4 text-center p-4 mb-0 mb-sm-5">
            <img class="mb-4" src="/assets/img/icon/truck.png" alt="" width="95">
            <h5 class="fw-bold barter-bage-color-text">Bank Sampah</h5>
            <p>Terintegrasi dengan bank sampah terdekat untuk pendistribusian dan pengelolaan sampah.</p>
        </div>
    </div>
</div>

{{-- middle home --}}
<div class="py-5 mb-10 border-top">
    <div class="card mb-5" style="max-width: 1500px;">
        <div class="row g-20">
            <div class="col-md-6">
                <img src="/assets/img/images/tambahan home.jpg" class="img-fluid rounded-start" alt="groceries-image">
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <h2 class="fw-bold barter-bage-color-text"><b> Bukan Hanya Tentang Kami...<br>
                            namun juga para komunitas di sekitar kami.
                        </b></h2>
                    <br>
                    <p class="card-text"> Kami berkomitmen untuk membantu masyarakat dalam pendistribusian sampah menjadi barang yang lebih bermanfaat.
                        Dengan adanya "BarterBage" diharapkan dapat menunjang kebersihan lingkungan dan perekonomian masyarakat setempat untuk memberikan kehidupan yang lebih baik lagi bagi mereka.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- bottom home --}}
    <br><br>
    <div class="py-5 mb-10 border-top">
        <div class="card mb-5">
            <img src="/assets/img/images/tambahan home 2.jpg" class="card-img-top" alt="groceries-image">
            <div class="card-body">
                <h2 class="fw-bold barter-bage-color-text">Perjalanan Untuk Dekade Selanjutnya...</h2>
                <br>
                <p class="card-text">Berkomitmen untuk menciptakan kesadaran akan lingkungan yang lebih bersih dan sehat.<br>
                    Kini kami berupaya untuk menciptakan kesadaran tersebut keseluruh penjuru daerah.<br>
                    Dengan misi ini, BarterBage dapat menyatukan kekuatan akan pentingnya kesadaran lingkungan dan manfaat yang diberikan bagi perekonomian masyarakat sekitar.</p>
            </div>

            @endsection

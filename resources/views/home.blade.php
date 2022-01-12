@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- top home --}}
    <div class="row align-items-center justify-content-between mb-5">
        <div class="col-md-7">
            <h1 class="title-cta mb-2">Tukar Sampah, Dapat <span>Sembako</span></h1>
            <p class="lh-lg mb-4">Platform penukaran sampah jenis non-organik pertama di Indonesia dilengkapi dengan daftar sembako yang dapat ditukarkan dengan point hasil penukaran sampah.</p>
            <a class="btn barter-bage-color text-white py-3 px-5 rounded-lg fw-bold" href="{{ Route('penukaran-sampah') }}">Tukar Sampah</a>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
        </div>
    </div>

    {{-- middle home --}}
    <div class="py-5 mb-5 border-top pt-5">
        <div class="col-12">
            <h3 class="text-center mb-5 fw-bold">Mengapa BarterBage?</h3>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-sm-4 text-center p-4">
                <img class="mb-3" src="/assets/img/icon/sandclock.png" alt="" width="40">
                <h5 class="fw-bold barter-bage-color-text">Tukar Cepat</h5>
                <p>Penukaran sampah diproses dengan cepat oleh admin kami untuk pengalaman terbaik anda.</p>
            </div>
            <div class="col-12 col-sm-4 text-center p-4">
                <img class="mb-3" src="/assets/img/icon/coin.png" alt="" width="40">
                <h5 class="fw-bold barter-bage-color-text">Bage Points</h5>
                <p>Hasil penukaran berupa point yang dapat digunakan untuk ditukarkan dengan paket sembako yang tersedia.</p>
            </div>
            <div class="col-12 col-sm-4 text-center p-4">
                <h1>🚚</h1>
                <h5 class="fw-bold barter-bage-color-text">Bank Sampah</h5>
                <p>Terintegrasi dengan bank sampah terdekat untuk pendistribusian dan pengelolaan sampah.</p>
            </div>
        </div>
    </div>
@endsection
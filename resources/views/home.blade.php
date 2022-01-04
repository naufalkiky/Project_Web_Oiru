@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- top home --}}
    <div class="row align-items-center justify-content-between mb-5">
        <div class="col-md-7">
            <h1 class="title-cta mb-2">Tukar Sampah, Dapat <span>Sembako</span></h1>
            <p class="lh-lg mb-4">Platform penukaran sampah jenis non-organik pertama di Indonesia dilengkapi dengan daftar sembako yang dapat ditukarkan dengan point hasil penukaran sampah.</p>
            <a class="btn barter-bage-color text-white py-3 px-5 rounded-lg fw-bold" href="/tukar-sampah">Tukar Sampah</a>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
        </div>
    </div>

    {{-- middle home --}}
    <div class="py-5 mb-5">
        <div class="col-12">
            <h3 class="text-center mb-5 fw-bold">Mengapa BarterBage?</h3>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-sm-4 text-center p-4 rounded border middle-home">
                <img src="{{ asset('assets/img/icon/clock.svg') }}" alt="fast" width="50" class="mb-2">
                <h5 class="fw-bold barter-bage-color-text">Tukar Cepat</h5>
                <p>Penukaran sampah diproses dengan cepat oleh admin kami untuk pengalaman terbaik anda.</p>
            </div>
            <div class="col-12 col-sm-4 text-center p-4 rounded border middle-home">
                <img src="{{ asset('assets/img/icon/wallet.svg') }}" alt="point" width="50" class="mb-2">
                <h5 class="fw-bold barter-bage-color-text">Bage Points</h5>
                <p>Hasil penukaran berupa point yang dapat digunakan untuk ditukarkan dengan sembako yang tersedia.</p>
            </div>
            <div class="col-12 col-sm-4 text-center p-4 rounded border middle-home">
                <img src="{{ asset('assets/img/icon/trash.svg') }}" alt="trash" width="50" class="mb-2">
                <h5 class="fw-bold barter-bage-color-text">Bank Sampah</h5>
                <p>Terintegrasi dengan bank sampah terdekat untuk pendistribusian dan pengelolaan sampah.</p>
            </div>
        </div>
    </div>
@endsection
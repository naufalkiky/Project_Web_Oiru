@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="row align-items-center justify-content-around">
        <div class="col-md-7">
            <h1 class="title-cta mb-2">Tukar Sampah, Dapat <span>Sembako</span></h1>
            <p class="lh-lg mb-4">Platform penukaran sampah jenis non-organik pertama di Indonesia dilengkapi dengan daftar sembako yang dapat ditukarkan dengan point hasil penukaran sampah.</p>
            <button class="btn barter-bage-color text-white py-3 px-5 rounded-lg fw-bold">Tukar Sampah</button>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Tukar Sembako')

@section('content')
    <div class="row mb-5 mt-3 mx-auto">
        <div class="col-12 col-lg-4 pb-3 left-side">
            <h4 class="mb-3 fw-bold">Penukaran Sembako</h4>
            <p>Akumulasi point dari penukaran sampah dapat ditukarkan dengan paket sembako berkualitas dan tentu saja bermanfaat bagi anda.</p>
            <div class="d-flex flex-lg-column flex-row align-content-center mb-2"> 
            @auth
                <div class="col-6 col-lg-12 card rounded-lg shadow p-2 mb-0 mb-lg-4 me-3 me-lg-0 w-50">
                    <a class="text-decoration-none text-black" href="/user/dashboard/{{ Auth::user()->id }}"> <img src="/assets/img/icon/coin.png" alt="" width="20"> : <span class="fw-bold barter-bage-color-text">{{ Auth::user()->bage_points }}</span></a>
                </div>
            @endauth
                <div class="col-6 col-lg-12">
                    <a class="btn barter-bage-color text-white p-2" href="{{ Route('penukaran-sampah') }}">Tukar Sampah</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 right-side">
            <form action="{{ Route('sembako.search') }}" method="get" class="d-flex">
                @csrf
                <div class="input-group mb-2 shadow">
                    <input type="search" class="form-control" placeholder="Cari nama paket/produk.." name="keyword" value="{{ request('keyword') }}">
                    <button class="btn barter-bage-color text-white" type="submit">Cari</button>
                </div>
            </form>
            <hr class="mb-2 mb-lg-4">
            <div class="row mb-4">
                @foreach ($groceries as $package)
                    <div class="col-sm-6 mb-4">
                        <div class="card shadow rounded-lg card-sembako">
                            <img src="/assets/img/groceries/{{ $package->image_groceries }}" class="card-img-top" alt="groceries-image">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $package->package_name }}</h5>
                                <small class="card-text">Deskripsi isi paket sembako.</small>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-12 col-lg-6 text-center text-md-right pb-2 pb-lg-0">
                                        <div class=""><img src="/assets/img/icon/coin.png" alt="" width="20"> {{ $package->bage_points }}</div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <a href="sembako/{{ $package->id }}" class="btn barter-bage-color text-white w-100"><small>Tukarkan</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
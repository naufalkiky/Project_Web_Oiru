@extends('layouts.app')

@section('title', 'Tukar Sampah')

@section('content')
    <div class="row mb-5 mt-3 mx-auto">
        <div class="col-12 col-lg-4 pb-3 left-side">
            <h4 class="mb-3 fw-bold">Sembako</h4>
            <p>Akumulasi point dari penukaran sampah dapat ditukarkan dengan sembako berkualitas dan tentu saja bermanfaat bagi anda.</p>
        </div>
        <div class="col-12 col-lg-8 right-side">
            <form action="" method="post" class="d-flex">
                <div class="input-group mb-2 shadow">
                    <input class="form-control search-control" type="search" placeholder="Cari Sembako yang Anda Inginkan" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </div>
            </form>
            <hr class="mb-4">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <div class="card shadow rounded-lg card-sembako">
                        <img src="..." class="card-img-top" alt="sembako-image">
                        <div class="card-body">
                            <h5 class="card-title">Nama Sembako</h5>
                            <small class="card-text">Deskripsi tentang sembako.</small>
                        </div>
                        <div class="card-footer">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-lg-6 text-center text-md-right pb-2 pb-lg-0">
                                    <small class="opacity-75">100 BagePoints</small>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <a href="#" class="btn barter-bage-color text-white w-100"><small>Tukarkan >></small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
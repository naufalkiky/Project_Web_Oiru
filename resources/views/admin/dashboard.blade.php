@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-3 py-3 dashboard-jumbotron">
        <div class="container py-3">
            <h2 class="fw-bold mt-4 text-white">Selamat Datang {{ Auth::user()->name }} !</h2>
            <p class="mb-4  text-white">Semangat bekerja, semoga semuanya berjalan dengan baik.</p>
            <div class="card rounded-lg p-2">
                <div class="card-body">
                    <p class="card-text fw-bold">Data Penukaran Sampah Pengguna ♻️</p>
                    <div class="container border rounded p-2">
                        <div class="d-md-flex d-block justify-content-between align-items-center ">
                            <p class="mb-2 mb-md-0">👉 Penukaran sampah pengguna dengan BagePoints</p>
                            <a href="{{ Route('admin.transaksi-sampah') }}" class="btn barter-bage-color-darker text-white">Lihat Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mx-auto py-3 mb-5">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-6 pe-auto pe-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="fw-bold">📊 Kelola Data Transaksi Sembako</p>
                        <div class="container border-top pt-3 mb-4">
                            <div class="d-md-flex d-block justify-content-between align-items-center ">
                                <div class="mb-2 mb-md-0">
                                    <small class="fw-bold">Data Sembako 📦</small>
                                    <p class="card-text mt-1">Data paket sembako yang tersedia</p>
                                </div>
                                <a href="{{ Route('admin.data-sembako') }}" class="btn barter-bage-color-darker text-white">Lihat Data</a>
                            </div>
                        </div>
                        <div class="container border-top pt-3">
                            <div class="d-md-flex d-block justify-content-between align-items-center ">
                                <div class="mb-2 mb-md-0">
                                    <small class="fw-bold">Data penukaran Sembako 🛍️</small>
                                    <p class="card-text mt-1">Data transaksi penukaran sembako</p>
                                </div>
                                <a href="{{ Route('admin.transaksi-sembako') }}" class="btn barter-bage-color-darker text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-auto ps-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="fw-bold">👨🏻‍🦱 Lihat Data Pengguna BarterBage</p>
                        <div class="container border-top pt-3 mb-2">
                            <div class="d-md-flex d-block justify-content-between align-items-center ">
                                <div class="mb-2 mb-md-0">
                                    <small class="fw-bold">Data Pengguna 📦</small>
                                    <p class="card-text mt-1">Pengguna cerdas telah memilih BarterBage</p>
                                </div>
                                <a href="{{ Route('admin.data-users') }}" class="btn barter-bage-color-darker text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="fw-bold">📈 Statistik BarterBage</p>
                        <div class="container border-top pt-3 mb-2">
                            <div class="d-md-flex d-block justify-content-between align-items-center ">
                                <div>
                                    <p class="mb-1">Total berat sampah =<span class="fw-bold"> {{ $total_weight }}</span> Kg</p>
                                    <p class="mb-1">Jumlah paket sembako =<span class="fw-bold"> {{ $total_groceries }}</span> Paket</p>
                                    <p class="mb-1">Jumlah pengguna aktif =<span class="fw-bold"> {{ $total_users }}</span> User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
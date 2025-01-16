@extends('layouts.dashboard')

@section('title', 'Detail Penukaran Sampah')

@section('content')
    <div class="container mt-3 mx-auto py-3 mb-5">
        <div class="row justify-content-center align-items-start mb-2">
            <div class="col-lg-10">
                <div class="card mb-4 pt-4 pb-3 mx-auto" style="background-color: #36572A">
                    <h4 class="fw-bold text-center text-white">Detail Penukaran Sampah</h4>
                </div>
            </div>
        </div>
        @foreach ($Total_Jelantah as $jelantah)
            <div class="row justify-content-center align-items-start mb-2">
                <div class="col-lg-10">
                    <div class="card mb-4 p-4 mx-auto">
                        <img class="image_garbage mx-auto" src="/assets/img/jelantah/{{ $jelantah->gambar_jelantah }}" alt="gambar_jelantah">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-start mb-4">
                <div class="col-lg-10 pe-auto pe-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            @if ($jelantah->status == 'Berhasil')
                                <p class="fw-bold">✅ Penukaran {{ $jelantah->status }}</p>
                            @elseif ($jelantah->status == 'Dalam penjemputan')
                                <p class="fw-bold">🚚 Penukaran sedang {{ $jelantah->status }}</p>
                            @else
                                <p class="fw-bold">❌ Penukaran {{ $jelantah->status }}</p>
                            @endif
                            <div class="container border-top pt-3 mb-2 mt-3">
                                <div class="d-md-flex d-block justify-content-between align-self-center">
                                    <div class="text-left">
                                        <p class="opacity-75 mb-auto mb-md-0">ID Penukaran</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-right">{{ $jelantah->id }}</p>
                                    </div>
                                </div>
                                <div class="d-md-flex d-block justify-content-between align-self-center">
                                    <div class="text-left">
                                        <p class="opacity-75 mb-auto mb-md-0">Tanggal Penukaran</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-right">{{ $jelantah->created_at }} WIB</p>
                                    </div>
                                </div>
                                @if ($jelantah->status == 'Berhasil' || $jelantah->status == 'Dalam penjemputan')
                                    <div class="d-md-flex d-block justify-content-between align-self-center">
                                        <div class="text-left">
                                            <p class="opacity-75 mb-auto mb-md-0">Nomor Penjemputan</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-right">{{ $jelantah->pick_up_number }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 ps-auto ps-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="fw-bold">🔎 Informasi Penukaran</p>
                            <div class="container border-top pt-3 mb-2 mt-3">
                                <div class="d-md-flex d-block justify-content-between align-self-center">
                                    <div class="text-left">
                                        <p class="opacity-75 mb-auto mb-md-0">Berat Sampah</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-right">{{ $jelantah->berat_jelantah }} Kg</p>
                                    </div>
                                </div>
                                <div class="d-md-flex d-block justify-content-between align-self-center">
                                    <div class="text-left">
                                        <p class="opacity-75 mb-auto mb-md-0">Alamat</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-right">{{ $jelantah->users->address }}</p>
                                    </div>
                                </div>
                                @if ($jelantah->status == 'Berhasil')
                                    <div class="d-md-flex d-block justify-content-between align-self-center">
                                        <div class="text-left">
                                            <p class="opacity-75 mb-auto mb-md-0">Total BagePoints</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-right">{{ $jelantah->berat_jelantah * 50 }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5 me-auto ms-auto">
                @if ($jelantah->status == 'Berhasil')
                    <a class="btn barter-bage-color text-white detail-btn py-2" href="{{ Route('penukaran-sampah') }}">Tukar Sampah lagi</a>
                @else
                    <a class="btn btn-secondary detail-btn py-2" href="https://linktr.ee/aniko2001">Hubungi Admin</a>
                @endif
            </div>
        @endforeach
    </div>
@endsection
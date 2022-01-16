@extends('layouts.app')

@section('title', 'Tukar Sembako')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('failed'))
        <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
            {{ session()->get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @foreach ($groceries as $package)    
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-lg-4 pe-auto pe-lg-4">
                <div class="border rounded mb-4 py-4 text-center ">
                    <img class="image_groceries mx-auto" src="/assets/img/groceries/{{ $package->image_groceries }}" alt="image_groceries">
                </div>
            </div>
            <div class="col-lg-8 ps-auto ps-lg-5">
                <div class="mb-4">
                    <h2 class="fw-bold mb-3 barter-bage-color-text">{{ $package->package_name }}</h2>
                    <p class="mb-0"><small>BagePoints:</small></p>
                    <p class="fw-bold"><img src="/assets/img/icon/coin.png" alt="" width="20"> {{ $package->bage_points }}</p>
                </div>
                <div class="mb-4">
                    <p class="fw-bold">{{ $package->description }}</p>
                    <p>
                        Pengiriman barang akan dilakukan paling lambat dalam waktu 7 X 24 Jam hari kerja.
                        Jika barang tidak tersedia, pesanan dapat dibatalkan dan BagePoints akan dikembalikan seluruhnya.
                    </p>
                </div>
                
            </div>
        </div>
        <div class="mb-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active tab-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#policy" type="button" role="tab" aria-controls="policy" aria-selected="true">Persyaratan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-link" id="barter-tab" data-bs-toggle="tab" data-bs-target="#barter" type="button" role="tab" aria-controls="barter" aria-selected="false">Penukaran</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="policy" role="tabpanel" aria-labelledby="policy-tab">
                    <h4 class="mt-4 pt-2 fw-bold">Persyaratan</h4>
                    <p>Persyaratan yang perlu anda penuhi untuk penukaran BagePoints dengan Sembako diantaranya yaitu:</p>
                    <ol>
                        <li class="mb-2">Anda membutuhkan <strong>{{ $package->bage_points }} BagePoints</strong> untuk memesan paket sembako ini</li>
                        <li class="mb-2">Alamat yang terdaftar pada akun anda sudah sesuai</li>
                        <li class="mb-2">Nomor HP atau Telefon yang terdaftar pada akun sudah sesuai</li>
                        <li class="mb-2">Segala pertanyaan dan masukan dapat anda salurkan <a class="btn-link" href="https://linktr.ee/aniko2001" target="_blank">disini</a></li>
                    </ol>
                </div>
                <div class="tab-pane fade" id="barter" role="tabpanel" aria-labelledby="barter-tab">
                    <h4 class="mt-4 pt-2 fw-bold">Penukaran</h4>
                    <p class="pb-3">Lengkapi data yang dibutuhkan agar proses pengantaran sembako dapat diselesaikan hingga sukses.</p>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label class="form-label fw-bold">Data Pengguna</label>
                                <div class="card rounded p-3 mb-1">
                                    <div class="mb-1">{{ Auth::user()->name }}</div>
                                    <div class="mb-1">{{ Auth::user()->no_hp }}</div>
                                    <div class="mb-1">{{ Auth::user()->address }}</div>
                                    @if (!Auth::user()->postal_code == '')
                                        <div>{{ Auth::user()->postal_code }}</div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <em><small>Ubah data pada halaman dashboard jika belum sesuai.</small></em>
                                </div>
                                <div class="mb-3">
                                    <label for="postal_code" class="form-label fw-bold">Kode Pos</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Masukkan kode pos sesuai alamat anda" value="{{ old('postal_code') }}">
                                    </div>
                                    @error('postal_code')
                                        <div class="text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="quantity" class="form-label fw-bold">Jumlah Penukaran</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="quantity" id="quantity" min="1" placeholder="Masukkan jumlah paket yang ingin ditukar" value="{{ old('quantity') }}">
                                        <div class="input-group-text">Paket</div>
                                    </div>
                                    @error('quantity')
                                        <div class="text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="note" class="form-label fw-bold">Catatan Tambahan</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="note" id="note" autocomplete="off" value="{{ old('note') }}" placeholder="Catatan tambahan, boleh diisi atau ngga..">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn barter-bage-color text-white fw-bold" style="padding-top: 8px; padding-bottom: 8px;">Pesan Paket Sembako</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
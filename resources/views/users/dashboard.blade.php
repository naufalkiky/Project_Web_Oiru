@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-3 py-3 dashboard-jumbotron">
        <div class="container py-3">
            <h2 class="fw-bold mt-4 text-white">Selamat Datang {{ Auth::user()->name }} !</h2>
            <p class="mb-4  text-white">Semoga kamu dalam keadaan sehat ya.</p>
            <div class="card rounded-lg p-2">
                <div class="card-body">
                    <p class="card-text fw-bold">BagePoints 🪙</p>
                    <div class="container border rounded p-2">
                        <div class="d-md-flex d-block justify-content-between align-items-center ">
                            <p class="mb-2 mb-md-0">BagePoints kamu saat ini: {{ Auth::user()->bage_points }}</p>
                            <div>
                                <a href="{{ Route('penukaran-sampah') }}" class="btn barter-bage-color-darker text-white mb-2 mb-sm-0">Tukar Sampah</a>
                                <a href="{{ Route('penukaran-sembako') }}" class="btn barter-bage-color-darker text-white">Tukar Sembako</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mx-auto py-3 mb-5">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-6 pe-auto pe-lg-4">
                
                {{-- riwayat penukaran sampah --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="fw-bold">🕰️ Riwayat Transaksi Penukaran Sampah</p>
                        @if (!$garbages->isEmpty())
                            @foreach ($garbages as $garbage)
                                <div class="container border-top pt-3 mb-2 mt-3">
                                    <div class="d-md-flex d-block justify-content-between align-items-center mb-2">
                                        <div>
                                            <small>ID Penukaran: <span class="fw-bold">{{ $garbage->id }}</span></small>
                                            <br>
                                            <small>Waktu Penukaran: <span class="fw-bold">{{ $garbage->created_at }}</span></small>
                                        </div>
                                        <small class="text-danger">{{ $garbage->status }}</small>
                                    </div>
                                    <a class="btn-link" href="#">Lihat Detail</a>
                                </div>
                                @endforeach
                                
                        @else
                            <small class="py-3"><em>Belum ada riwayat penukaran sampah</em></small>
                        @endif
                    </div>
                </div>
                <div class="pagination mt-3 text-center justify-content-start">
                    {{ $garbages->links() }}
                </div>
                
                {{-- riwayat penukaran sembako --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="fw-bold">🕰️ Riwayat Transaksi Penukaran Sembako</p>
                        <div class="container border-top pt-3 mb-2 mt-3">
                            <div class="d-md-flex d-block justify-content-between align-items-center mb-4">
                                <div>
                                    <small class="fw-bold">ID Penukaran</small>
                                    <br>
                                    <small class="fw-bold">Tanggal</small>
                                </div>
                                <small class="text-success">Dalam pengemasan</small>
                            </div>
                            <a class="btn-link" href="#">Lihat Detail</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 ps-auto ps-lg-4">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="fw-bold">💁🏻‍♂️ Profil Anda</p>
                        <div class="container border-top pt-3 mb-4">
                            @foreach ($users as $user)
                                <form action="" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email<span class="text-danger fw-bold"> *</span></label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" disabled>
                                        @error('email')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap<span class="text-danger fw-bold"> *</span></label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                                        @error('name')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">Nomor HP<span class="text-danger fw-bold"> *</span></label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $user->no_hp }}">
                                        @error('no_hp')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat<span class="text-danger fw-bold"> *</span></label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Contoh: Jl. Sesama No. 21, Jakarta Selatan" value="{{ $user->address }}">
                                        @error('address')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="password" class="form-label">Password<span class="text-danger fw-bold"> *</span></label>
                                        <input type="password" class="form-control" name="password" id="password">
                                        @error('password')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-check float-end">
                                            <input class="form-check-input" type="checkbox" value="" id="show_pass" onclick="showPassword()">
                                            <label class="form-check-label" for="show_pass">Lihat Password</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" name="register" class="btn barter-bage-color text-white w-100">Perbarui Profil</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
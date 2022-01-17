@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-3 py-3 dashboard-jumbotron">
        <div class="container py-3">
            <h2 class="fw-bold mt-4 text-white">Selamat Datang {{ Auth::user()->name }} !</h2>
            <p class="mb-4 text-white">Semoga kamu dalam keadaan sehat ya.</p>
            <div class="card rounded-lg p-2">
                <div class="card-body">
                    <p class="card-text fw-bold">BagePoints 🪙</p>
                    <div class="container border rounded p-2">
                        <div class="d-md-flex d-block justify-content-between align-items-center ">
                            <p class="mb-2 mb-md-0">BagePoints kamu saat ini: <span class="fw-bold">{{ Auth::user()->bage_points }}</span></p>
                            <div>
                                <a href="{{ Route('penukaran-sampah') }}" class="btn barter-bage-color-darker text-white mb-2 mb-sm-0">Tukar Sampah</a>
                                <a href="{{ Route('status') }}" class="btn barter-bage-color-darker text-white mb-2 mb-sm-0">Status Penukaran Sembako</a>
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
                                <div class="container overflow-auto border-top pt-3 mb-2 mt-3">
                                    <div class="d-md-flex d-block justify-content-between align-items-center mb-2">
                                        <div class="mb-2 mb-md-0">
                                            <small>{{ $garbage->created_at }} WIB</small>
                                            <div class="mt-2">Berat Sampah: <span class="fw-bold">{{ $garbage->garbage_weight }}</span> Kg</div>
                                            @if ($garbage->status == 'Berhasil')
                                                <div>Jumlah BagePoint: <span class="fw-bold">{{ $garbage->garbage_weight*50 }}</span></div>
                                            @endif
                                        </div>
                                        @if ($garbage->status == 'Berhasil')
                                            <small class="text-success fw-bold p-1 rounded" style="background-color: rgb(225, 248, 228)">{{ $garbage->status }}</small>        
                                        @elseif ($garbage->status == 'Dalam penjemputan')
                                            <small class="text-secondary fw-bold p-1 rounded" style="background-color: rgb(240, 240, 240)">{{ $garbage->status }}</small>
                                        @else
                                            <small class="text-danger fw-bold p-1 rounded" style="background-color: rgb(249,242,244)">{{ $garbage->status }}</small>
                                        @endif
                                    </div>
                                    <a class="btn-link" href="dashboard/detail_penukaran_sampah/{{ $garbage->id }}">Lihat detail</a>
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
            </div>

            {{-- edit profil --}}
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
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" disabled>
                                        @error('email')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                                        @error('name')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">Nomor HP</label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $user->no_hp }}">
                                        @error('no_hp')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="4" placeholder="Ex: Jl. Puma Raya No.21, RT 01/RW 09, Kel. Jayamukti, Kec. Cikarang Pusat, Kabupaten Bekasi, Jawa Barat">{{ $user->address }}</textarea>
                                        @error('address')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="password" class="form-label">Password</label>
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
    <!-- show/hide password -->
    <script>
        function showPassword() {
            const password = document.getElementById("password")
            
            if (password.type == "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>
@endsection
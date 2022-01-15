@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
    <!-- awal form register -->
    <div class="card mx-auto auth-form mb-4">
        <div class="card-header text-center pt-4">
            <h3 class="fw-bold">Register</h3>
            <p class="opacity-75">Silahkan mendaftar untuk menggunakan berbagai fitur yang ada di BarterBage</p>
        </div>
        <div class="card-body">
            <form action="{{ Route('register') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email<span class="text-danger fw-bold"> *</span></label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap<span class="text-danger fw-bold"> *</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP<span class="text-danger fw-bold"> *</span></label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ old('no_hp') }}">
                    @error('no_hp')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat<span class="text-danger fw-bold"> *</span></label>
                    <textarea class="form-control" name="address" id="address" cols="30" rows="4" placeholder="Ex: Jl. Puma Raya No.21, Kel. Jayamukti, Kec. Cikarang Pusat, Kabupaten Bekasi, Jawa Barat">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password<span class="text-danger fw-bold"> *</span></label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
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
                    <button type="submit" name="register" class="btn barter-bage-color text-white w-100">Register</button>
                </div>
                <div class="text-center">
                    <p>Sudah punya akun? <a href="/login" class="text-decoration-none fw-bold" style="color: #36572A;">Masuk di sini</a></p>
                </div>
            </form>
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
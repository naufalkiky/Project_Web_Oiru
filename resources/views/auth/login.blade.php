@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <!-- awal form register -->
    <div class="card mx-auto auth-form mb-4">
        <div class="card-header text-center pt-4">
            <h3 class="fw-bold">Login</h3>
            <p class="opacity-75">Silahkan masuk menggunakan akun anda yang sudah terdaftar</p>
        </div>
        <div class="card-body">
            <form action="{{ Route('login') }}" method="post">
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
                    <button type="submit" name="login" class="btn barter-bage-color text-white w-100">Login</button>
                </div>
                <div class="text-center">
                    <p>Belum punya akun? <a href="/register" class="text-decoration-none fw-bold" style="color: #36572A;">Daftar di sini</a></p>
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
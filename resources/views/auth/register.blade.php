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
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email<span class="text-danger fw-bold"> *</span></label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap<span class="text-danger fw-bold"> *</span></label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password<span class="text-danger fw-bold"> *</span></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-4">
                    <div class="form-check float-end">
                        <input class="form-check-input" type="checkbox" value="" id="show_pass" onclick="showPassword()">
                        <label class="form-check-label" for="show_pass">Lihat Password</label>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="konfirmasi_password" class="form-label">Konfirmasi Password<span class="text-danger fw-bold"> *</span></label>
                    <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" required>
                </div>
                <div class="mb-5">
                    <div class="form-check float-end">
                        <input class="form-check-input" type="checkbox" value="" id="show_pass2" onclick="showConfirmPassword()">
                        <label class="form-check-label" for="show_pass2">Lihat Password</label>
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
  
        function showConfirmPassword() {
            const konfirmasi = document.getElementById("konfirmasi_password");
  
            if (konfirmasi.type == "password") {
                konfirmasi.type = "text";
            } else {
                konfirmasi.type = "password";
            }
        }
    </script>
@endsection
@extends('layouts.admin_app')

@section('title', 'Login')

@section('admin_content')
    <!-- awal form register -->
    <div class="card mx-auto auth-form mt-5">
        <div class="card-header text-center pt-4">
            <h3 class="fw-bold">Login Admin</h3>
            <p class="opacity-75">Silahkan masuk menggunakan akun admin</p>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email<span class="text-danger fw-bold"> *</span></label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password<span class="text-danger fw-bold"> *</span></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-5">
                    <div class="form-check float-end">
                        <input class="form-check-input" type="checkbox" value="" id="show_pass" onclick="showPassword()">
                        <label class="form-check-label" for="show_pass">Lihat Password</label>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
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
@extends('layouts.dashboard')

@section('title', 'Data Sembako')

@section('content')
    <div class="container mt-3 mx-auto py-3 mb-5">
        @if (session()->has('admin_success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session()->get('admin_success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (!$users->isEmpty())
            <h3 class="fw-bold mb-4">Data Pengguna</h3>
            <div class="table-responsive card p-4">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">BagePoints</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->bage_points }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination mt-3 text-center justify-content-end">
                {{ $users->links() }}
            </div>
        @else
            <div class="text-center">
                <p class="fs-2">😔</p>
                <p>Belum ada Pengguna</p>
            </div>
        @endif
    </div>
@endsection
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
        @if (!$groceries->isEmpty())
            <h3 class="fw-bold">Data Sembako</h3>
            <p class="mb-4">Data paket sembako saat ini.</p>
            <a class="btn barter-bage-color text-white mb-4" href="{{ Route('admin.tambah-sembako') }}">Tambah Data</a>
            <div class="table-responsive card p-4">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Bage Points</th>
                        <th scope="col" class="w-50">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($groceries as $package)
                        <tr>
                            <th scope="row">{{ $package->id }}</th>
                            <td>{{ $package->package_name }}</td>
                            <td>{{ $package->bage_points }}</td>
                            <td>{{ $package->description }}</td>
                            <td>
                                <a class="btn btn-secondary btn-action" href="update-sembako/{{ $package->id }}">Detail</a>
                                <a class="btn btn-danger btn-action" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- delete modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Data sembako akan terhapus secara permanen.
                        </div>
                        <div class="modal-footer">
                            <form action="delete-sembako/{{ $package->id }}" method="post">
                                @csrf
                                <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination mt-3 text-center justify-content-end">
                {{ $groceries->links() }}
            </div>
        @else
            <div class="text-center">
                <p>Data sembako kosong</p>
                <a href="{{ Route('admin.tambah-sembako') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        @endif
    </div>
@endsection
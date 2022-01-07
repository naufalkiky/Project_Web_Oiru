@extends('layouts.admin_app')

@section('title', 'Data Sembako')

@section('admin_content')
    @if (session()->has('admin_success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            {{ session()->get('admin_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (!$groceries->isEmpty())
        <h3 class="fw-bold">Data Sembako</h3>
        <p class="mb-4">Data sembako saat ini.</p>
        <a class="btn btn-primary mb-4" href="{{ Route('admin.tambah-sembako') }}">Tambah Data</a>
        <div class="table-responsive card p-4">
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Sembako</th>
                    <th scope="col">Bage Points</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($groceries as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->bage_points }}</td>
                        <td>
                            <a class="btn btn-secondary btn-action" href="" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                            <a class="btn btn-warning btn-action" href="update-sembako/{{ $item->id }}">Update</a>
                            <a class="btn btn-danger btn-action" href="" data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</a>
                        </td>
                    </tr>
                    <!-- detail modal -->
                    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="detailModalLabel">{{ $item->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="fw-bold">ID Sembako :</p>
                                    <p>{{ $item->id }}</p>
                                    <p class="fw-bold">Nama Sembako :</p>
                                    <p>{{ $item->name }}</p>
                                    <p class="fw-bold">Bage Points :</p>
                                    <p>{{ $item->bage_points }}</p>
                                    <p class="fw-bold">Deskripsi :</p>
                                    <p>{{ $item->description }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <form action="delete-sembako/{{ $item->id }}" method="post">
                            @csrf
                            <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center">
            <p>Data sembako kosong</p>
            <a href="{{ Route('admin.tambah-sembako') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    @endif
@endsection
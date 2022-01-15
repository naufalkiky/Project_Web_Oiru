@extends('layouts.dashboard')

@section('title', 'Data Transaksi Sampah')

@section('content')
    <div class="container mt-3 mx-auto py-3 mb-5">
        @if (!$garbages->isEmpty())
            <h3 class="fw-bold">Data Penukaran Sampah</h3>
            <p class="mb-4">Data penukaran sampah saat ini.</p>
            <div class="table-responsive card p-4">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">ID Sampah</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($garbages as $garbage)
                        <tr>
                            <th scope="row">{{ $garbage->id }}</th>
                            <td>{{ $garbage->user_id }}</td>
                            <td>{{ $garbage->garbage_weight }} Kg</td>
                            <td>{{ $garbage->created_at }}</td>
                            <td>{{ $garbage->status }}</td>
                            <td>
                                <a class="btn btn-secondary btn-action" href="detail-sampah/{{ $garbage->id }}">Detail</a>
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
                            Data penukaran sampah akan terhapus secara permanen.
                        </div>
                        <div class="modal-footer">
                            <form action="delete-transaksi-sampah/{{ $garbage->id }}" method="post">
                                @csrf
                                <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center mb-4 mt-0">
                <img src="{{ asset('assets/img/logo/truck-illustrator.jpg') }}" alt="truck-illustrator" class="admin-image">
                <p class="mt-3">Data penukaran sampah masih kosong</p>
            </div>
        @endif
    </div>
@endsection
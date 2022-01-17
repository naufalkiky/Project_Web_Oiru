@extends('layouts.dashboard')

@section('title', 'Data Transaksi Sampah')

@section('content')
    <div class="container mt-3 mx-auto py-3 mb-5">
        @if (!$groceries_transactions->isEmpty())
            <h3 class="fw-bold">Data Penukaran Sembako</h3>
            <p class="mb-4">Data penukaran sembako saat ini.</p>
            <div class="table-responsive card p-4">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total BagePoints</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($groceries_transactions as $transaction)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $transaction->users->name }}</td>
                            <td>{{ $transaction->groceries->package_name }}</td>
                            <td>{{ $transaction->quantity }}</td>
                            <td>{{ $transaction->total_bage_points }}</td>
                            <td>
                                @if ($transaction->status == 'Berhasil')
                                    <small class="text-success fw-bold p-1 rounded" style="background-color: rgb(225, 248, 228)">{{ $transaction->status }}</small>        
                                @elseif ($transaction->status == 'Dalam pengiriman')
                                    <small class="text-secondary fw-bold p-1 rounded" style="background-color: rgb(240, 240, 240)">{{ $transaction->status }}</small>
                                @else
                                    <small class="text-danger fw-bold p-1 rounded" style="background-color: rgb(249,242,244)">{{ $transaction->status }}</small>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-secondary btn-action" href="detail-sembako/{{ $transaction->id }}">Detail</a>
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
                            Data penukaran sembako akan terhapus secara permanen.
                        </div>
                        <div class="modal-footer">
                            <form action="delete-transaksi-sembako/{{ $transaction->id }}" method="post">
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
                <p class="mt-3">Data penukaran sembako masih kosong</p>
            </div>
        @endif
    </div>
@endsection
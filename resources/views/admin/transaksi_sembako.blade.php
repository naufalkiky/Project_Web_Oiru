@extends('layouts.dashboard')

@section('title', 'Data Transaksi Sampah')

@section('content')
    <nav class="mb-2 bg-light pt-3" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link text-decoration-none" href="{{ Route('admin') }}"><small>Dashboard</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Data Penukaran Sembako</small></li>
            </ol>
        </div>
    </nav>
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
                                <a class="btn btn-danger btn-action" href="delete-transaksi-sembako/{{ $transaction->id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination mt-3 text-center justify-content-end">
                {{ $groceries_transactions->links() }}
            </div>
        @else
            <div class="text-center mb-4 mt-0">
                <img src="{{ asset('assets/img/logo/truck-illustrator.jpg') }}" alt="truck-illustrator" class="admin-image">
                <p class="mt-3">Data penukaran sembako masih kosong</p>
            </div>
        @endif
    </div>
@endsection
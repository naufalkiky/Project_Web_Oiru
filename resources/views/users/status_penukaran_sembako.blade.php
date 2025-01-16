@extends('layouts.app')

@section('title', 'Status Penukaran Sembako')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (!$groceries_transactions->isEmpty())
        <h3 class="fw-bold">Status Penukaran Sembako</h3>
        <p class="mb-4">Konfirmasi paket sembako diterima jika anda sudah menerimanya.</p>
        <div class="table-responsive card p-4">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">Paket Sembako</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Waktu Penukaran</th>
                        <th scope="col">Resi Pengiriman</th>
                        <th scope="col">Total BagePoints</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($groceries_transactions as $transaction)
                        <tr>
                            <td><a class="text-decoration-none btn-link" href="/sembako/{{ $transaction->groceries->id }}">{{ $transaction->groceries->package_name }}</a></td>
                            <td>{{ $transaction->quantity }}</td>
                            <td>{{ $transaction->created_at }}</td>
                            <td>
                                @if (!$transaction->invoice_number == '')
                                    {{ $transaction->invoice_number }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $transaction->total_oiru_points }}</td>
                            <td>
                                @if ($transaction->status == 'Berhasil')
                                    <small class="text-success fw-bold p-1 rounded" style="background-color: rgb(225, 248, 228)">{{ $transaction->status }}</small>        
                                @elseif ($transaction->status == 'Dalam pengiriman')
                                    <form action="status_penukaran_sembako/{{ $transaction->id }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn barter-bage-color text-white">Diterima</button>
                                    </form>
                                @else
                                    <small class="text-danger fw-bold p-1 rounded" style="background-color: rgb(249,242,244)">{{ $transaction->status }}</small>
                                @endif
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
            <p class="my-3">Anda belum melakukan penukaran sembako</p>
            <a href="{{ Route('sembako') }}" class="btn barter-bage-color text-white">Lihat Paket Sembako</a>
        </div>
    @endif
@endsection
@extends('layouts.app')

@section('title', 'Status Penukaran Sembako')

@section('content')
@if (!$groceries_transactions->isEmpty())
    <h3 class="fw-bold mb-4">Status Penukaran Sembako</h3>
    <div class="table-responsive card p-4">
        <table class="table align-middle">
            <thead>
            @foreach ($groceries_transactions as $transaction)
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Paket Sembako</th>
                    <th scope="col">Jumlah</th>
                    @if (!$transaction->postal_code == '')
                        <th scope="col">Pengantaran</th>
                    @endif
                    <th scope="col">Waktu Penukaran</th>
                    <th scope="col">Total BagePoints</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $number++ }}</th>
                        <td><a class="text-decoration-none btn-link text-black" href="/sembako/{{ $transaction->id }}">{{ $transaction->groceries->package_name }}</a></td>
                        <td>{{ $transaction->quantity }}</td>
                        @if (!$transaction->postal_code == '')
                            <td>{{$transaction->postal_code}}</th>
                        @endif
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->total_bage_points }}</td>
                        <td>
                            @if ($transaction->status == 'Berhasil')
                                <small class="text-success fw-bold p-1 rounded" style="background-color: rgb(225, 248, 228)">{{ $transaction->status }}</small>        
                            @elseif ($transaction->status == 'Dalam penjemputan')
                                <small class="text-secondary fw-bold p-1 rounded" style="background-color: rgb(240, 240, 240)">{{ $transaction->status }}</small>
                            @else
                                <small class="text-danger fw-bold p-1 rounded" style="background-color: rgb(249,242,244)">{{ $transaction->status }}</small>
                            @endif</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <div class="pagination mt-3 text-center justify-content-end">
        {{ $groceries_transactions->links() }}
    </div>
    @else
        <div class="text-center">
            <p class="fs-2">😔</p>
            <p>Belum ada Pengguna</p>
        </div>
    @endif
@endsection
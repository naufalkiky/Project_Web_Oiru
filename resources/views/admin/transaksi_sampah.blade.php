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
                                <a class="btn btn-danger btn-action" href="">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center">
                <p>Data penukaran sampah kosong</p>
            </div>
        @endif
    </div>
@endsection
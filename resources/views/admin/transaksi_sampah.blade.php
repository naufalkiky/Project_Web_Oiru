@extends('layouts.dashboard')

@section('title', 'Data Transaksi Sampah')

@section('content')
    <nav class="mb-2 bg-light pt-3" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link text-decoration-none" href="{{ Route('admin') }}"><small>Dashboard</small></a></li>
            <li class="breadcrumb-item active" aria-current="page"><small>Data Penukaran Sampah</small></li>
            </ol>
        </div>
    </nav>
    <div class="container mt-3 mx-auto py-3 mb-5">
        @if (!$Total_Jelantah->isEmpty())
            <h3 class="fw-bold">Data Penukaran Sampah</h3>
            <p class="mb-4">Data penukaran sampah saat ini.</p>
            <div class="table-responsive card p-4">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Berat Sampah</th>
                        <th scope="col">Waktu Penukaran</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($Total_Jelantah as $jelantah)
                        <tr>
                            <th scope="row">{{ $number++ }}</th>
                            <td>{{ $jelantah->users->name }}</td>
                            <td>{{ $jelantah->berat_jelantah }} Liter</td>
                            <td>{{ $jelantah->created_at }} WIB</td>
                            <td>
                                @if ($jelantah->status == 'Berhasil')
                                    <small class="text-success fw-bold p-1 rounded" style="background-color: rgb(225, 248, 228)">{{ $jelantah->status }}</small>        
                                @elseif ($jelantah->status == 'Dalam penjemputan')
                                    <small class="text-secondary fw-bold p-1 rounded" style="background-color: rgb(240, 240, 240)">{{ $jelantah->status }}</small>
                                @else
                                    <small class="text-danger fw-bold p-1 rounded" style="background-color: rgb(249,242,244)">{{ $jelantah->status }}</small>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-secondary btn-action" href="detail-sampah/{{ $jelantah->id }}">Detail</a>
                                <a class="btn btn-danger btn-action" href="delete-transaksi-sampah/{{ $jelantah->id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination mt-3 text-center justify-content-end">
                {{ $Total_Jelantah->links() }}
            </div>
        @else
            <div class="text-center mb-4 mt-0">
                <img src="{{ asset('assets/img/logo/truck-illustrator.jpg') }}" alt="truck-illustrator" class="admin-image">
                <p class="mt-3">Data penukaran sampah masih kosong</p>
            </div>
        @endif
    </div>
@endsection
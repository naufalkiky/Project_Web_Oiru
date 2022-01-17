@extends('layouts.dashboard')

@section('title', 'Update Status Penukaran Sembako')

@section('content')
    <div class="container mt-3 mx-auto py-3 mb-5">
    @if (session()->has('admin_success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            {{ session()->get('admin_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('admin_danger'))
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            {{ session()->get('admin_danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="card card-detail mb-4 pt-4 pb-3 mx-auto">
            <h4 class="fw-bold text-center">Detail Penukaran Sembako</h4>
        </div>
        <div class="card card-body card-detail mx-auto pt-4">
            @foreach ($groceries_transactions as $transaction)
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama Penukar</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $transaction->users->name }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="package_name" class="form-label fw-bold">Nama Paket</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="package_name" id="package_name" value="{{ $transaction->groceries->package_name }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label fw-bold">Jumlah</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $transaction->quantity }}" readonly>
                            <div class="input-group-text">Paket</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="garbage_weight" class="form-label fw-bold">Catatan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $transaction->note }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Alamat</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="4" readonly>{{ $transaction->users->address }}</textarea>
                    </div>
                    <div class="mb-5">
                        <label for="status" class="form-label fw-bold">Status</label>
                        <div class="input-group">
                            <select class="form-select" aria-label="Default select example" name="status" id="status">
                                <option @if ($transaction->status == "Belum diverifikasi") {{ "selected" }} value="Belum diverifikasi" @endif value="Belum diverifikasi">Belum diverifikasi</option> 
                                <option @if ($transaction->status == "Dalam penjemputan") {{ "selected" }}  value="Dalam penjemputan" @endif >Dalam penjemputan</option>
                                <option @if ($transaction->status == "Berhasil") {{ "selected" }} value="Berhasil" @endif >Berhasil</option> 
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 d-sm-flex d-block">
                        <a class="btn btn-secondary w-25" href="/admin/dashboard/transaksi-sampah" style="padding-top: 8px; padding-bottom: 8px;">Kembali</a>
                        <button type="submit" class="btn barter-bage-color text-white w-100 mb-2 mb-sm-0 ms-0 ms-sm-2" style="padding-top: 8px; padding-bottom: 8px;">Update Status</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection
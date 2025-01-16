@extends('layouts.dashboard')

@section('title', 'Update Status Penukaran Sampah')

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
            <h4 class="fw-bold text-center">Detail Penukaran Sampah</h4>
        </div>
        <div class="card card-body card-detail mx-auto pt-4">
            @foreach ($Total_Jelantah as $jelantah)
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="my-2 border rounded text-center">
                            <img src="/assets/img/jelantah/{{ $jelantah->gambar_jelanah }}" alt="gambar_jelantah" class="image_garbage">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nama Penukar</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $jelantah->users->name }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nomor Hp</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $jelantah->users->no_hp }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="berat_jelantah" class="form-label fw-bold">Berat Sampah</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="berat_jelantah" id="garbage_weight" value="{{ $jelantah->berat_jelantah }}" readonly>
                            <div class="input-group-text">Kg</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Alamat</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="4" readonly>{{ $jelantah->users->address }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="berat_jelentah" class="form-label fw-bold">Catatan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $jelantah->note }}" readonly>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="status" class="form-label fw-bold">Status</label>
                        <div class="input-group">
                            <select class="form-select" aria-label="Default select example" name="status" id="status">
                                <option @if ($jelantah->status == "Belum diverifikasi") {{ "selected" }} value="Belum diverifikasi" @endif value="Belum diverifikasi">Belum diverifikasi</option> 
                                <option @if ($jelantah->status == "Dalam penjemputan") {{ "selected" }}  value="Dalam penjemputan" @endif value="Dalam penjemputan">Dalam penjemputan</option>
                                <option @if ($jelantah->status == "Berhasil") {{ "selected" }} value="Berhasil" @endif value="Berhasil">Berhasil</option> 
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
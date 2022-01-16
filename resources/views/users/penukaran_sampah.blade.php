@extends('layouts.app')

@section('title', 'Tukar Sampah')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row align-items-center justify-content-between mb-5 mt-3">
        <div class="col-md-5">
            <h2 class="fw-bold">Masukkan Data Sampah</h2>
            <p class="mb-4">Masukkan total berat, alamat dan gambar sampah untuk melakukan penukaran sampah. Klik <a class="fw-bold text-decoration-none" href="#" style="color:#36572A" data-bs-toggle="modal" data-bs-target="#helpModal">disini</a> untuk panduan dan informasi penukaran.</p>
            <form action="{{ Route('penukaran-sampah') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="garbage_weight" class="form-label fw-bold">Berat</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="garbage_weight" id="garbage_weight" min="1" placeholder="Total berat sampah dalam satuan kilogram" value="{{ old('weight') }}">
                        <div class="input-group-text">Kg</div>
                    </div>
                    @error('garbage_weight')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label fw-bold">Alamat</label>
                    <textarea class="form-control mb-2" name="address" id="address" cols="30" rows="4" placeholder="Ex: Jl. Puma Raya No.21, RT 01/RW 09, Kel. Jayamukti, Kec. Cikarang Pusat, Kabupaten Bekasi, Jawa Barat" readonly>{{ Auth::user()->address }}</textarea>
                    <em><small>Ubah alamat pada halaman dashboard jika belum sesuai.</small></em>
                </div>
                <div class="mb-3">
                    <label for="image_garbage" class="form-label fw-bold">Gambar</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image_garbage" id="image_garbage">
                    </div>
                    @error('image_garbage')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="note" class="form-label fw-bold">Catatan Tambahan</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="note" id="note" value="{{ old('note') }}" autocomplete="off" placeholder="Catatan tambahan, boleh diisi atau ngga..">
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn barter-bage-color text-white fw-bold" style="padding-top: 8px; padding-bottom: 8px;">Input Data Sampah</button>
                </div>
            </form>
            
            <!-- Modal -->
            <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="helpModalLabel">Syarat Penukaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke, Paham</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Tukar Sampah')

@section('content')
    <div class="row align-items-center justify-content-between mb-5 mt-3">
        <div class="col-md-5">
            <h2 class="fw-bold">Masukkan Data Sampah</h2>
            <p class="mb-4 opacity-75">Masukkan jenis, total berat dan gambar sampah yang ingin anda tukarkan. Klik <a class="fw-bold text-decoration-none" href="#" style="color:#36572A" data-bs-toggle="modal" data-bs-target="#helpModal">disini</a> untuk panduan dan informasi penukaran.</p>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="garbage_type" class="form-label fw-bold">Jenis Sampah (non-organik)</label>
                    <select class="form-select" aria-label="Default select example" name="garbage_type" id="garbage_type">
                        <option selected disabled>-- Pilih Jenis Sampah --</option>
                        <option value="Kertas">Kertas</option>
                        <option value="Plastik">Plastik</option>
                        <option value="Kaleng">Kaleng</option>
                        <option value="Kain">Kain</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label fw-bold">Berat</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="weight" id="weight" placeholder="Total berat sampah dalam satuan kilogram" required>
                        <div class="input-group-text">Kg</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label fw-bold">Alamat</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Contoh: Jl. Sesama No. 21, Jakarta Selatan" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label fw-bold">Gambar</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn barter-bage-color text-white w-100" style="padding-top: 8px; padding-bottom: 8px;">Input Data Sampah</button>
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
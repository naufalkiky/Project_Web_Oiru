@extends('layouts.app')

@section('title', 'Tukar Sampah')

@section('content')
<div class="row align-items-center justify-content-between mb-5">
    <div class="col-md-5">
        <h2 class="fw-bold">Masukkan Data Sampah</h2>
        <p class="mb-4 opacity-75">Masukkan jenis, total berat dan gambar sampah yang ingin anda tukarkan.</p>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="jenis_sampah" class="form-label fw-bold">Jenis Sampah (non-organik)</label>
                <input type="text" class="form-control" name="jenis_sampah" id="jenis_sampah" required>
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label fw-bold">Berat</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="berat" id="berat" placeholder="Total berat sampah dalam satuan kilogram" required>
                    <div class="input-group-text">Kg</div>
                </div>
            </div>
            <div class="mb-4">
                <label for="gambar_sampah" class="form-label fw-bold">Gambar</label>
                <input type="file" class="form-control" name="gambar_sampah" id="gambar_sampah">
            </div>
            <div class="mb-4">
                <button type="submit" class="btn barter-bage-color text-white w-100" style="padding-top: 8px; padding-bottom: 8px;">Input Data Sampah</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/img/logo/home-illustrator.svg') }}" alt="home-illustration" class="home-img">
    </div>
</div>
@endsection
@extends('layouts.admin_app')

@section('title', 'Dashboard')
    
@include('includes.admin_header')

@section('admin_content')
    <h2 class="fw-bold text-center mt-4 mb-5">Selamat Datang di Dashboard Admin BarterBage</h2>
    <div class="row justify-content-between align-items-center">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header fw-bold">Data Sembako</div>
                <div class="card-body">
                    <p class="card-text">Berisi data-data sembako yang tersedia untuk ditukar dengan points pada halaman sembako BarterBage.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header fw-bold">Data Penukaran Sampah</div>
                <div class="card-body">
                    <p class="card-text">Berisi data transaksi penukaran sampah dengan bage points yang dilakukan user pada halaman penukaran BarterBage.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header fw-bold">Data Penukaran Sembako</div>
                <div class="card-body">
                    <p class="card-text">Berisi data transaksi penukaran bage points dengan sembako yang dilakukan user pada halaman sembako BarterBage.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
@endsection
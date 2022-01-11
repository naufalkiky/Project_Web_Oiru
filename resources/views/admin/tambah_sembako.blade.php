@extends('layouts.dashboard')

@section('title', 'Tambah Data Sembako')

@section('content')
    <div class="container mt-3 mx-auto py-3 mb-5">
        <div class="card card-form mb-4 pt-4 pb-3 mx-auto">
            <h4 class="fw-bold text-center">Tambah Data Sembako</h4>
        </div>
        <div class="card card-body card-form mx-auto pt-4">
            <form action="{{ Route('admin.tambah-sembako') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="package_name" class="form-label fw-bold">Nama Paket</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="package_name" id="package_name" placeholder="Ex: Paket X" value="{{ old('package_name') }}">
                    </div>
                    @error('package_name')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bage_points" class="form-label fw-bold">Jumlah Point</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="bage_points" id="bage_points" placeholder="Ex: 200" value="{{ old('bage_points') }}" min="1">
                    </div>
                    @error('bage_points')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image_groceries" class="form-label fw-bold">Gambar</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image_groceries" id="image_groceries" value="{{ old('image_groceries') }}">
                    </div>
                    @error('image_groceries')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label fw-bold">Deskripsi</label>
                    <div class="input-group">
                        <textarea name="description" id="description" cols="60" rows="5" class="rounded" value="{{ old('description') }}"></textarea>
                    </div>
                    @error('description')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary w-100" style="padding-top: 8px; padding-bottom: 8px;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.admin_app')

@extends('title', 'Tambah Data Sembako')

@section('admin_content')
    <div class="card card-body card-form">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nama Sembako</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="point" class="form-label fw-bold">Jumlah Point</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="point" id="point" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Gambar</label>
                <div class="input-group">
                    <input type="file" class="form-control" name="image" id="image" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="description" class="form-label fw-bold">Deskripsi</label>
                <div class="input-group">
                    <textarea name="description" id="description" cols="60" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary w-100" style="padding-top: 8px; padding-bottom: 8px;">Tambah</button>
            </div>
        </form>
    </div>
@endsection
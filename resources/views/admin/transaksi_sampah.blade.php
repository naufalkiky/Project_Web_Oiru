@extends('layouts.admin_app')

@section('title', 'Data Transaksi Sampah')

@section('admin_content')
    <h3 class="fw-bold">Data Penukaran Sampah</h3>
    <p class="mb-4">Data penukaran sampah saat ini.</p>
    <div class="table-responsive card p-4">
        <table class="table align-middle">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Pengguna</th>
                <th scope="col">Jenis Sampah</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Bage Points</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a class="btn btn-warning btn-action" href="">Update</a>
                    <a class="btn btn-danger btn-action" href="">Hapus</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
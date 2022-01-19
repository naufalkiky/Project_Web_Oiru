@extends('layouts.app')

@section('title', 'Prosedur')

@section('content')
    <div class="row mt-3">
        <div class="col-12 mb-4">
            <h2 class="text-center fw-bold mb-3">Langkah mudah menggunakan <span class="barter-bage-color-text">BarterBage</span></h2>
            <div class="text-center">Untuk pengalaman terbaik anda, kami memberikan cara mudah</div> 
            <div class="text-center">untuk menggunakan fitur andalan dari BarterBage.</div>
        </div>
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-active-tabs active" id="pills-tukar-sampah-tab" data-bs-toggle="pill" data-bs-target="#pills-tukar-sampah" type="button" role="tab" aria-controls="pills-tukar-sampah" aria-selected="true">Penukaran Sampah</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-active-tabs" id="pills-tukar-sembako-tab" data-bs-toggle="pill" data-bs-target="#pills-tukar-sembako" type="button" role="tab" aria-controls="pills-tukar-sembako" aria-selected="false">Penukaran Sembako</button>
            </li>
        </ul>
        <div class="container border rounded p-4">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tukar-sampah" role="tabpanel" aria-labelledby="pills-tukar-sampah-tab">
                    <div class="container px-0 pt-3 px-md-5 text-center">
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 1</em> - Masuk ke halaman penukaran sampah dan masukkan data yang dibutuhkan</div>
                            <img src="{{ asset('assets/img/steps/tukar-sampah-1.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 2</em> - Setelah data sampah dikirim, cek status penukaran anda pada dashboard</div>
                            <img src="{{ asset('assets/img/steps/tukar-sampah-2.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 3</em> - Apabila sampah yang ditukarkan telah diverifikasi oleh admin kami, anda mendapatkan nomor penjemputan yang dapat dilihat pada detail penukaran sampah</div>
                            <img src="{{ asset('assets/img/steps/tukar-sampah-3.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 4</em> - Setelah sampah anda dijemput oleh petugas kami, status penukaran anda berhasil, dan pastikan BagePoint sudah ditambahkan pada akun anda</div>
                            <img src="{{ asset('assets/img/steps/tukar-sampah-4.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tukar-sembako" role="tabpanel" aria-labelledby="pills-tukar-sembako-tab">
                    <div class="container px-0 pt-3 px-md-5 text-center">
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 1</em> - Masuk ke halaman penukaran sembako dan pilih paket yang anda inginkan</div>
                            <img src="{{ asset('assets/img/steps/tukar-sembako-1.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 2</em> - Setelah memilih paket, jangan lupa baca persyaratan dan pastikan BagePoints yang anda miliki mencukupi yaa</div>
                            <img src="{{ asset('assets/img/steps/tukar-sembako-2.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 3</em> - Pilih tab penukaran dan lengkapi data yang dibutuhkan untuk kesuksesan proses pengiriman</div>
                            <img src="{{ asset('assets/img/steps/tukar-sembako-3.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 4</em> - Setelah memesan paket sembako, cek status pada dashboard di "Status Penukaran Sembako" dan tunggu sampai admin kami memprosesnya</div>
                            <img src="{{ asset('assets/img/steps/tukar-sembako-4.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 5</em> - Jika status penukaran sembako anda sudah dalam penjemputan, kami akan memberikan nomor resi pengiriman</div>
                            <img src="{{ asset('assets/img/steps/tukar-sembako-5.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                        <div class="mb-5">
                            <div class="mb-4"><em class="fw-bold">Step 6</em> - Apabila paket sembako sudah anda terima, anda bisa klik tombol "Diterima" untuk menyelesaikan proses penukaran sembako</div>
                            <img src="{{ asset('assets/img/steps/tukar-sembako-6.png') }}" class="steps-image" alt="tukar-sampah-step">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
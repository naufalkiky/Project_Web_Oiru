@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <h1 class="fw-bold text-center mb-4">Overview</h1>
    <div class="ms-0 ms-md-5 me-0 me-md-5">
        <div class="col-sm-20 mb-2">
            <div class="card shadow rounded-lg card-sembako">
                <img src="{{ asset('assets/img/images/minyak-jelantah.jpg') }}" class="card-img-top" alt="illustration-image">
                <p class="text-justify ms-0 ms-md-5 me-0 me-md-5">
                    <br>
                    Minyak jelantah adalah minyak bekas hasil dari proses penggorengan makanan yang telah digunakan berulang kali. Minyak ini biasanya mengalami perubahan karakteristik seperti warna yang menjadi lebih gelap, tekstur yang lebih kental, dan aroma yang kurang sedap. Secara kimiawi, minyak jelantah mengandung senyawa hasil oksidasi dan degradasi termal, seperti asam lemak bebas dan zat polimer, yang terbentuk akibat paparan suhu tinggi dan reaksi dengan sisa makanan.
                    <br><br>
                    Meskipun sering dianggap sebagai limbah yang tidak berguna, minyak jelantah memiliki potensi besar untuk didaur ulang menjadi produk bernilai tambah, seperti biodiesel, sabun, lilin, hingga bahan baku pelumas. Oleh karena itu, pengelolaan minyak jelantah secara bertanggung jawab melalui pengumpulan dan daur ulang menjadi langkah penting untuk menjaga kelestarian lingkungan.
                </p>
            </div>

            <br>
            <h1 class="fw-bold text-center mb-4">Our Solutions</h1>
            <div class="col-sm-20 mb-2">
                <div class="card shadow rounded-lg card-sembako">
                    <img src="{{ asset('assets/img/images/oiru_banner.png') }}" class="card-img-top" alt="illustration-image">
                    <p class="text-justify ms-0 ms-md-5 me-0 me-md-5">
                        <br>
                        Oiru merupakan platform digital inovatif yang dirancang untuk menjawab permasalahan lingkungan sekaligus memberikan manfaat ekonomi kepada masyarakat melalui pengelolaan limbah minyak jelantah. Dengan menggunakan website Oiru, masyarakat dapat mengumpulkan minyak jelantah yang telah digunakan di rumah atau tempat usaha dan menukarkannya dengan poin. Poin-poin yang terkumpul dapat ditukar dengan berbagai kebutuhan pokok seperti sembako, memberikan nilai tambah langsung kepada pengguna.
                        <br><br>
                        Oiru hadir sebagai solusi praktis dan berkelanjutan untuk mengatasi dampak negatif dari limbah minyak jelantah, serta mendorong kesadaran masyarakat akan pentingnya daur ulang. Dengan pendekatan yang inovatif, Oiru tidak hanya menawarkan pengelolaan limbah, tetapi juga memberikan insentif ekonomi bagi masyarakat sebagai bentuk apresiasi atas partisipasi mereka.
                    </p>
                </div>

                <br>
                <h1 class="fw-bold text-center mb-4">The Impact We Made</h1>
                <div class="col-sm-20 mb-2">
                    <div class="card shadow rounded-lg card-sembako">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/359/2024/06/25/jelantah-2311793416.png" class="card-img-top" alt="illustration-image">
                        <p class="text-justify ms-0 ms-md-5 me-0 me-md-5">
                            <br>
                            Oiru tidak hanya berfokus pada pengelolaan limbah, tetapi juga memberikan dampak positif terhadap lingkungan dan ekonomi. Melalui sistem pengumpulan minyak jelantah, Oiru membantu mengurangi pencemaran air, kerusakan ekosistem, dan penyumbatan saluran drainase yang sering terjadi akibat pembuangan minyak jelantah secara sembarangan.
                            <br><br>
                            Selain itu, hasil olahan minyak jelantah dapat digunakan untuk membuat produk bernilai ekonomis seperti biodiesel, sabun, lilin, dan pelumas industri, yang mendukung ekonomi hijau dan menciptakan lapangan kerja baru. Dengan demikian, Oiru berkontribusi dalam membangun ekonomi berkelanjutan dan meningkatkan kesadaran masyarakat tentang pentingnya pengelolaan limbah yang ramah lingkungan.
                            <br><br>
                            Seiring dengan berkembangnya platform ini, Oiru telah berhasil menghubungkan ribuan rumah tangga dan usaha kecil dengan bank sampah dan fasilitas daur ulang, menciptakan dampak positif yang lebih luas dalam pengelolaan limbah di Indonesia. Kami berkomitmen untuk terus mengembangkan dan memperluas jangkauan kami agar lebih banyak masyarakat dapat merasakan manfaat dari pengelolaan minyak jelantah yang bertanggung jawab.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

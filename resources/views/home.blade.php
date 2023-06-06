<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle}}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layout.nav')
    {{-- Welcome Page --}}
    <div id="main">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 mt-3 order-md-2">
                    <img class="img" src="{{ Vite::asset('resources/images/main.jpg') }}" alt="image" width="500px" style="margin-right: 5px;">
                </div>
                <div class="col-md-7 order-md-1 py-5">
                    <h1 class="judul">Welcome to MyInventory</h1>
                    <p class="fs-5 mt-3">Kami adalah penyedia layanan website inventory barang di Indonesia. Fokus bisnis kami yaitu menekan adanya biaya fulfilment yang ada pada perusahaan terutama terhadap masalah penyimpanan pengadaan barang. Layanan yang dapat disesuaikan setiap kebutuhan mulai dari penjual e-commerce hingga bisnis korporasi.</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row mt-4">
                            <a href="#"><img class="img" src="{{ Vite::asset('resources/images/appstore.svg') }}" alt="image" width="150px" style="margin-right: 5px;"></a>
                            <a href="#"><img class="img" src="{{ Vite::asset('resources/images/playstore.svg') }}" alt="image" width="150px" style="margin-right: 5px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-auto order-md-1 py-5  text-center">
        <h1 class="judul">Layanan Kami di <Span class="text-success">MyInventory</Span>.</h1>
        <p class="fs-5 mt-3">Dengan adanya myInventory pengadaan barang menjadi mudah.</p>
    </div>
    {{-- welcome page 2 --}}
    <div class="container py-5 px-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col rounded-3">
          <div class="card d-flex flex-column flex-md-row">
            <img src="{{ Vite::asset('resources/images/terjangkau.png') }}" class="card-img-top ms-5 mt-5 me-4 mb-5" alt="icon-uang" style="width: 150px;">
            <div class="card-body me-3">
              <h5 class="card-title-top mt-4">Paling Terjangkau</h5>
              <p class="card-text">Model bisnis kami yang unik dapat menekan biaya fulfillment menjadi jauh lebih terjangkau dan saling menguntungkan..</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card d-flex flex-column flex-md-row">
            <img src="{{ Vite::asset('resources/images/fleksibel.png') }}" class="card-img-top ms-5 mt-5 me-4 mb-5" alt="icon-fleksibel" style="width: 150px;">
            <div class="card-body me-3">
              <h5 class="card-title-top mt-4">Paling Fleksibel</h5>
              <p class="card-text">Layanan yang dapat disesuaikan setiap kebutuhan mulai dari penjual e-commerce hingga bisnis korporasi.</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card d-flex flex-column flex-md-row">
                <img src="{{ Vite::asset('resources/images/checklist.png') }}" class="card-img-top ms-5 mt-5 me-4 mb-5" alt="checklist-icon" style="width: 150px;">
                <div class="card-body me-3">
                  <h5 class="card-title-top mt-4">Kualitas Layanan Terbaik</h5>
                  <p class="card-text">Kombinasi dari teknologi canggih & pekerja yang profesional siap hasilkan kualitas layanan terbaik.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card d-flex flex-column flex-md-row">
                <img src="{{ Vite::asset('resources/images/growth.png') }}" class="card-img-top ms-5 mt-5 me-4 mb-5" alt="growth-icon" style="width: 150px;">
                <div class="card-body me-3">
                  <h5 class="card-title-top mt-4  ">Tingkatkan Penjualan</h5>
                  <p class="card-text">Lebih fokus dalam pengembangan kualitas & pemasaran produk karena bebas repot urusan operasional.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- Profil Biodata --}}
    <div class="col-md-auto order-md-1 py-5  text-center">
        <h1 class="judul">About Us <Span class="text-success">MyInventory</Span>.</h1>
        <p class="fs-5 mt-3">Mari Berkenalan dengan Developer di MyInventory.</p>
    </div>
    <section>

        <!-- .container start -->
        <div class="container py-5">

            <!-- .row start -->
            <div class="row">

                <!-- .col start -->
                <div class="col-lg-4">

                    <div class="card ">
                        <div class="card-body shadow bg-success">
                            <img src="{{ Vite::asset('resources/images/profil.jpeg') }}" alt="Profil Picture" class="img-thumbnail w-150 mb-3">
                            <h2 class="text-center text-light">Rangga Raditya Hariyanto</h2>
                            <p class="card-text text-center text-light mb-4">
                                Founder of MyInventory IT Telkom Surabaya
                            </p>
                            <br>
                        </div>
                    </div>

                </div>
                <!-- .col end -->

                <!-- .col start -->
                <div class="col-lg-8">

                    <div class="shadow border rounded p-5 mb-4 ">
                        <h2 class="text-center mb-5">Tentang <Span class="text-success">Saya</Span></h2>
                        <p>Saya adalah Founder di MyInventory. Saat ini saya sedang berkuliah di IT Telkom Surabaya jurusan S1 Sistem Informasi. My Inventory dibuat untuk memenuhi Tugas UTS Pemrograman Framework.</p>

                        <p class="card-text">
                            <span class="text-muted mb-1 d-block">Alamat :</span>
                            <i class="bi bi-house-fill text-success"></i>
                            Dukuh Gemol 1B Nomor 19 Wiyung Surabaya.
                        </p> <!-- alamat end -->
                        <p class="card-text">
                            <span class="text-muted mb-1 d-block">Alamat Email</span>
                            <i class="bi bi-envelope text-success"> </i>rangga.raditya.21@student.is.ittelkom-sby.ac.id
                        </p>
                        <p class="card-text">
                            <span class="text-muted mb-1 d-block">Nomor Telepon</span>
                            <i class="bi bi-telephone-inbound-fill text-success"></i> 081331016271
                        </p>
                        <br><br>
                    </div>
                </div>
    </section>
    @vite('resources/js/app.js')
</body>
</html>

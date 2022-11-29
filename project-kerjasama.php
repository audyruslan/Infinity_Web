<?php
require 'functions.php';
require 'layouts/header_app.php';
?>

<!-- ======= Hero Section ======= -->
<section id="hero-design" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="text-center mt-3">
            <div>
                <h1>Inovasi Teknologi untuk <br> Memudahkan Investasi</h1>
                <h2>Nikmati Kemudahan Berinvestasi Mulai dari 100 ribuan</h2>
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h1>Partner Kami</h1>
            </div>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <?php
                    $queryLogo = mysqli_query($conn, "SELECT * FROM tb_landing_logo");
                    while ($logo = mysqli_fetch_assoc($queryLogo)) {
                    ?>
                    <div class="swiper-slide"><img src="assets/img/client/<?= $logo["logo"]; ?>" class="img-fluid"
                            alt="">
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- Card -->
    <div class="container-fluid mt-3">
        <div style="background-color:#303030;" class="card text-white mb-3 rounded">
            <div class="card-body">
                <div class="d-flex justify-content-between p-3 box-card-kerjasama">
                    <p>Tunggu apa lagi? <br>
                        ayo mulai investasi di <span style="color:#E1AE00;">Infinity </span>Project
                        Property</span></p>
                    <div class="d-flex align-items-center">
                        <a href="" class="btn btn-warning text-light">Mulai Investasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- ======= Portfolio Section ======= -->
    <section class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 style="text-align: center;">Cara Mudah Mendanai Properti</h1>
            </div>

            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="assets/img/icon/icon_daftar.png" width="120">
                    <div class="card mb-3 border-0 mt-3 box-portofolio-kerjasama" style="max-width: 15rem;">
                        <h5 class="card-title">Daftar</h5>
                        <p class="card-text">Lengkapi data diri seperti KTP dan rekening bank. Setelah terverifikasi,
                            kamu bisa mulai
                            mendanai.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/icon/icon_pilih_proyek.png" width="120">
                    <div class="card mb-3 border-0 mt-3 box-portofolio-kerjasama" style="max-width: 15rem;">
                        <h5 class="card-title">Pilih Proyek</h5>
                        <p class="card-text">Pilih dan pelajari proyek yang sesuai dengan kebutuhan kamu sebelum
                            melakukan pendanaan</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/icon/icon_deposit.png" width="120">
                    <div class="card mb-3 border-0 mt-3 box-portofolio-kerjasama" style="max-width: 15rem;">
                        <h5 class="card-title">Danai Proyek</h5>
                        <p class="card-text">Lakukan pendanaan dengan memasukkan nominal dana pada proyek yang kamu
                            pilih</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/icon/icon_dapat_untung.png" width="120">
                    <div class="card mb-3 border-0 mt-3 box-portofolio-kerjasama" style="max-width: 15rem;">
                        <h5 class="card-title">Dapatkan Keuntungan</h5>
                        <p class="card-text">Lakukan pendanaan dengan memasukkan nominal dana pada proyek yang kamu
                            pilih</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Mendanai property lebih mudah di <span style="color:#E1AE00;">Infinity </span>Project
                    Property</span>
                </h3>
                <p>Mendanai proyek properti dan turunannya sudah terbukti aman, stabil dan menguntungkan dalam jangka
                    pendek maupun panjang.</p>
            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="box text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/icon/icon_terjangkau.png" width="200">
                        <h3>Terjangkau</h3>
                        <p>
                            Mendanai dengan modal terjangkau mulai dari Rp 100 ribu.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/icon/icon_menguntungkan.png" width="200">
                        <h3>Menguntungkan</h3>
                        <p>
                            Keuntungan imbal hasil yang kompetitif hingga 20% per tahun.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/icon/icon_aman.png" width="200">
                        <h3>Aman</h3>
                        <p>
                            Keamanan dana berbasis aset dengan analisis risiko yang terukur.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/icon/icon_praktis.png" width="200">
                        <h3>Praktis</h3>
                        <p>
                            Memantau perkembangan proyek dapat dilakukan di mana saja
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- Card Investasi -->
    <!-- <section class="count">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>Ayo Mulai Investasi</h1>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img class=" card-img-top" src="assets/img/tes.jpg" alt=" Card image cap">
                        <div class="card-body">
                            <h6 class="card-title"><b>BTN Citra Palupi</b></h6>
                            <p style="font-size: 10px; color:#999999;"><i class="bi bi-geo-alt-fill"></i> Palupi,
                                Sulawesi Tengah</p>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size:12px">Min Investasi</p>
                                    <p style="font-size:14px"><b>IDR 100,000</b></p>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:12px">Terkumpul</p>
                                    <p style="font-size:14px"><b>IDR 1,00,000,000</b></p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Pendanaan Selesai</p>
                                <p style="font-size:12px">100%</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Dana yang dibutuhkan</p>
                                <p style="font-size:12.5px"><b>IDR 1,00,000,000</b></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Estimasi ROI Per Tahun</p>
                                <p style="font-size:12.5px"><b>9%</b></p>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col-4">
                                    <a href="#" class="btn btn-secondary btn-sm rounded">Konstruksi</a>
                                </div>
                                <div class="col-8">
                                    <p><i class="bi bi-calendar-week-fill"></i> Durasi 12-14 Bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class=" card-img-top" src="assets/img/tes.jpg" alt=" Card image cap">
                        <div class="card-body">
                            <h6 class="card-title"><b>BTN Citra Palupi</b></h6>
                            <p style="font-size: 10px; color:#999999;"><i class="bi bi-geo-alt-fill"></i> Palupi,
                                Sulawesi Tengah</p>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size:12px">Min Investasi</p>
                                    <p style="font-size:14px"><b>IDR 100,000</b></p>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:12px">Terkumpul</p>
                                    <p style="font-size:14px"><b>IDR 1,00,000,000</b></p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Pendanaan Selesai</p>
                                <p style="font-size:12px">100%</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Dana yang dibutuhkan</p>
                                <p style="font-size:12.5px"><b>IDR 1,00,000,000</b></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Estimasi ROI Per Tahun</p>
                                <p style="font-size:12.5px"><b>9%</b></p>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col-4">
                                    <a href="#" class="btn btn-secondary btn-sm rounded">Konstruksi</a>
                                </div>
                                <div class="col-8">
                                    <p><i class="bi bi-calendar-week-fill"></i> Durasi 12-14 Bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img class=" card-img-top" src="assets/img/tes.jpg" alt=" Card image cap">
                        <div class="card-body">
                            <h6 class="card-title"><b>BTN Citra Palupi</b></h6>
                            <p style="font-size: 10px; color:#999999;"><i class="bi bi-geo-alt-fill"></i> Palupi,
                                Sulawesi Tengah</p>
                            <div class="row">
                                <div class="col-6">
                                    <p style="font-size:12px">Min Investasi</p>
                                    <p style="font-size:14px"><b>IDR 100,000</b></p>
                                </div>
                                <div class="col-6">
                                    <p style="font-size:12px">Terkumpul</p>
                                    <p style="font-size:14px"><b>IDR 1,00,000,000</b></p>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Pendanaan Selesai</p>
                                <p style="font-size:12px">100%</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Dana yang dibutuhkan</p>
                                <p style="font-size:12.5px"><b>IDR 1,00,000,000</b></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p style="font-size:12px">Estimasi ROI Per Tahun</p>
                                <p style="font-size:12.5px"><b>9%</b></p>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col-4">
                                    <a href="#" class="btn btn-secondary btn-sm rounded">Konstruksi</a>
                                </div>
                                <div class="col-8">
                                    <p><i class="bi bi-calendar-week-fill"></i> Durasi 12-14 Bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Card Investasi -->

    <section class="section-bg">
        <!-- Card -->
        <!--<div class="container-fluid">-->
        <!--    <div style="background-color:#E1AE00;" class="card text-white mb-3 rounded">-->
        <!--        <div class="card-body">-->
        <!--            <div class="d-flex justify-content-between box-card-kerjasama">-->
        <!--                <p>Tunggu apa lagi? <br>-->
        <!--                    ayo mulai investasi di <span class="text-dark">Infinity </span>Project-->
        <!--                    Property</span></p>-->
        <!--                <div class="d-flex align-items-center">-->
        <!--                    <a href="" class="btn btn-dark text-light">Mulai Investasi</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- End Card -->

        <div class="container" style="margin-top: 120px;">
            <div class="section-title">
                <h2>Pertumbuhan dalam angka</h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/statistic_alternate.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Investor</h6>
                                    <h3 style="color: black;">7.811</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/statistic_alternate.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Dana Terkumpul</h6>
                                    <h3 style="color: black;">IDR 84,89 M</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/statistic_alternate.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Proyek</h6>
                                    <h3 style="color: black;">74</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/statistic_alternate.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Proyek Selesai</h6>
                                    <h3 style="color: black;">73</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_lahan.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Lahan</h6>
                                    <h3 style="color: black;">47.249 m2</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_vendor.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Vendor/Suplier</h6>
                                    <h3 style="color: black;">209</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_realisasi_roi.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Realisasi ROI per Tahun</h6>
                                    <h3 style="color: black;">6.25%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_tukang.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Tukang Terbedayakan</h6>
                                    <h3 style="color: black;">506</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_rumah_terbangun.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Rumah Terbangun</h6>
                                    <h3 style="color: black;">410</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_terlambat_bayar.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Terlambat Berbayar</h6>
                                    <h3 style="color: black;">0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/icon_csr.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">CSR</h6>
                                    <h3 style="color: black;">IDR 182 Jt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="max-width: 340px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="assets/img/icon/statistic_alternate.svg" width="80">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-muted">Mitra Terdaftar</h6>
                                    <h3 style="color: black;">50</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Card -->
        <div class="container-fluid" style="margin-top: 120px;">
            <div style="background-color:#E1AE00;" class="card text-white mb-3 rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between box-card-kerjasama">
                        <p>Tunggu apa lagi? <br>
                            ayo mulai investasi di <span class="text-dark">Infinity </span>Project
                            Property</span> sekarang</p>
                        <div class="d-flex align-items-center">
                            <a href="" class="btn btn-dark text-light">Mulai Investasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </section>
    
        <!-- Deskripsi Paket Kerjasama -->
    <section id="services" class="">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Paket Project Kerjasama</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 mt-5"">
                        <div class="icon-box text-center">
                            <h4 class="mb-3"><strong>Paket Khusus</strong></h4>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <h5 class="">Melakukan Transaksi Jual Beli Property Berbasis Syariah</h5>
                            <div class="btn-wrap mt-3">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=6285333555985&text=Assalamualaikum%0AHai%20Kak,%20Saya%20Memilih%20Paket%20Kerjasama%20Khusus,%20untuk%20Jasa %20Infinity%20Project%20Property."
                                    class="btn-company scrollto">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5"">
                        <div class="icon-box text-center">
                            <h4 class="mb-3"><strong>Paket Hemat</strong></h4>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <h5 class="">Kerjasama Tanpa Balik Nama Kepemilikan, 
                                Semua Biaya Ditanggung Pemilik.</h5>
                            <div class="btn-wrap mt-3">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=6285333555985&text=Assalamualaikum%0AHai%20Kak,%20Saya%20Memilih%20Paket%20Kerjasama%20Hemat,%20untuk%20Jasa %20Infinity%20Project%20Property."
                                    class="btn-company scrollto">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5"">
                        <div class="icon-box text-center">
                            <h4 class="mb-3"><strong>Paket Pas</strong></h4>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <h5 class="">Kerjasama Balik Nama Kepemilikan, Semua Biaya Ditanggung Kantor.</h5>
                            <div class="btn-wrap mt-3">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=6285333555985&text=Assalamualaikum%0AHai%20Kak,%20Saya%20Memilih%20Paket%20Kerjasama%20Pas,%20untuk%20Jasa %20Infinity%20Project%20Property."
                                    class="btn-company scrollto">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5">
                        <div class="icon-box text-center mb">
                            <h4 class="mb-3"><strong>Paket Lengkap</strong></h4>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <i class='bx bxs-diamond icon-paket-kerjasama' ></i>
                            <h5 class="">All In, Tahu Beres, Tinggal Menunggu Saja</h5>
                            <div class="btn-wrap mt-3">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=6285333555985&text=Assalamualaikum%0AHai%20Kak,%20Saya%20Memilih%20Paket%20Kerjasama%20Lengkap,%20untuk%20Jasa %20Infinity%20Project%20Property."
                                    class="btn-company scrollto">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Beberapa Ulasan dari Mereka yang telah menggunakan Jasa dari Infinity Project Property. Anda pun
                    juga bisa seperti Mereka!</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <?php
                    $queryTesti = mysqli_query($conn, "SELECT * FROM tb_landing_testi");
                    while ($testi = mysqli_fetch_assoc($queryTesti)) {
                    ?>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/<?= $testi['img_testi']; ?>" class="testimonial-img"
                                    alt="">
                                <h3><?= $testi["nama_lengkap"]; ?></h3>
                                <h4><?= $testi["pekerjaan"]; ?></h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?= $testi["ulasan"]; ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- Card -->
    <div class="container-fluid mt-3">
        <div style="background-color:#1B1B1B;" class="card text-white mb-3 rounded">
            <div class="card-body">
                <div class="row p-5">
                    <div class="col-lg-2">
                        <img src="assets/img/icon/customer_service_footer.svg" alt="">
                    </div>
                    <div class="col-lg-10">
                        <div class="d-flex align-items-center">
                            <p style="font-size: 30px; font-weight:600;">Anda memiliki
                                pertanyaan atau
                                butuh bantuan?</p>

                        </div>
                        <a href="" class="btn btn-warning text-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="container-fluid mt-3">
        <div style="background-color:#000000;" class="card text-white mb-3 rounded">
            <div class="card-body">
                <div class="row p-5">
                    <div class="col-lg-2">
                        <img src="assets/img/icon/info_footer.svg" alt="">
                    </div>
                    <div class="col-lg-10">
                        <div class="d-flex align-items-center">
                            <p style="font-size: 30px; font-weight:600;">Untuk informasi mengenai kerja sama
                                hubungi kami di</p>
                        </div>
                        <a href="" class="btn btn-warning text-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->


</main>

<?php
require 'layouts/footer_app.php';
?>
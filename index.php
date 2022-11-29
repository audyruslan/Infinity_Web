    <?php
    require 'layouts/header_app.php';
    require 'functions.php';
    ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <?php
                    $queryJumbotron = mysqli_query($conn, "SELECT * FROM tb_landing_jumbotron");
                    while ($jumbotron = mysqli_fetch_assoc($queryJumbotron)) {
                    ?>
                    <h1><?= $jumbotron["heading_1"]; ?></h1>
                    <h2><?= $jumbotron["heading_2"]; ?></h2>
                    <?php } ?>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

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

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3><span style="color:#E1AE00;">Infinity </span>Project Property</span>
                            </h3>
                            <?php
                            $queryAbout = mysqli_query($conn, "SELECT * FROM tb_landing_about");
                            while ($about = mysqli_fetch_assoc($queryAbout)) {
                            ?>
                            <p><?= $about["about_1"]; ?></p>
                            <br>
                            <p><?= $about["about_2"]; ?></p>
                            <?php } ?>

                            <a href="company-profile.php" class="about-btn"><span>See More</span> <i class="bx bx-chevron-right"></i></a> 
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex justify-content-center align-items-center">
                        <img class="image-about-index img-fluid rounded" src="assets/img/image-index.jpg" alt="">
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Project</h2>
                    <p>Kami dipilih dan dipercaya sebagai pelaksana proyek rancang dan konstruksi bangunan seperti,
                        Banungan Rumah Tinggal, Kost, Kontrakan, Ruko, Kantor, Baik Untuk Bangunan Baru dan juga
                        Renovasi</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a target="_blank" href="project-design.php">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-vector-pen"></i>
                                <h4 class="text-light">Desain Property</h4>
                                <p class="text-light">Visual 3D Eksterior, Gambar Arsitektur, Gambar Mekanikal
                                    Elektrikal, Gambar Struktur, Estimasi Biaya, 3D Inetrior.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <a target="_blank" href="project-konstruksi.php">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-building"></i>
                                <h4 class="text-light">Konstruksi Property</h4>
                                <p class="text-light">Rumah Tinggal, Perkantoran, Industri, Perbelanjaan, Kesehatan,
                                    Pendidikan, Penginapan, Tempat Hiburan, dll.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <a target="_blank" href="project-jualbeli.php">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-shop"></i>
                                <h4 class="text-light">Jual Beli Property</h4>
                                <p class="text-light">Tanah Kaplingan, Perumahan, Ruko, Jasa Jual Rumah Pribadi,
                                    Kost-kostan, dan Product Eksterior dan Interior.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <a target="_blank" href="project-kerjasama.php">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-hexagon-half"></i>
                                <h4 class="text-light">Kerjasama Property</h4>
                                <p class="text-light">Tanah, Project Kerjasama Tanah Kaplingan, Project Kerjasama
                                    Perumahan, Serta Kerjasama Properti Lainnya.</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->

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
                                    <img src="assets/img/testimonials/<?= $testi['img_testi']; ?>"
                                        class="testimonial-img" alt="">
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

        <!-- ======= Team Section ======= -->
        <!-- End Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list accordion" data-aos="fade-up">

                    <?php
                    $queryFaQ = mysqli_query($conn, "SELECT * FROM tb_landing_faq");
                    while ($faq = mysqli_fetch_assoc($queryFaQ)) {
                    ?>
                    <li>
                        <a data-bs-toggle="collapse" class="collapsed"
                            data-bs-target="#faq<?= $faq["id"]; ?>"><?= $faq["questions"]; ?><i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq<?= $faq["id"]; ?>" class="collapse" data-bs-parent=".faq-list">
                            <p><?= $faq["deskripsi"]; ?></p>
                        </div>
                    </li>
                    <?php } ?>

                </ul>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

    </main>
    <!-- End #main -->

    <?php
    require 'layouts/footer_app.php';
    ?>
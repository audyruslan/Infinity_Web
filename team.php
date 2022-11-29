<?php
    require 'layouts/header_app.php';
    require 'functions.php';
?>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Tim kami dalam membangun ekosistem Infinity Project Property, dengan Profesional di Bidangnya
                        siap membantu Anda.</p>
                </div>

                <div class="row justify-content-center">

                    <?php
                    $queryTeam = mysqli_query($conn, "SELECT * FROM tb_landing_team
                                                    INNER JOIN tb_jabatan
                                                    ON tb_landing_team.id_jabatan = tb_jabatan.id 
                                                    WHERE id_jabatan IN (1,2)");
                    while ($team = mysqli_fetch_assoc($queryTeam)) {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/<?= $team["img_card"]; ?>" class="img-fluid" width="600">
                                <div class="social">
                                    <a href="<?= $team["fb_link"]; ?>"><i class="bi bi-facebook"></i></a>
                                    <a href="<?= $team["wa_link"]; ?>"><i class="bi bi-whatsapp"></i></a>
                                    <a href="<?= $team["ig_link"]; ?>"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4><?= $team["nama_lengkap"]; ?></h4>
                                <span><?= $team["nama_jabatan"]; ?> Infinity Project Property</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                </div>

                <div class="row mt-5">
                    <div class="section-title">
                        <h3>Staff <br> <span style="color: #E1AE00;">Infinity</span> Project Property</h3>
                    </div>

                    <?php
                    $queryTeam = mysqli_query($conn, "SELECT * FROM tb_landing_team
                                                    INNER JOIN tb_jabatan
                                                    ON tb_landing_team.id_jabatan = tb_jabatan.id 
                                                    WHERE id_jabatan IN (5,14)");
                    while ($team = mysqli_fetch_assoc($queryTeam)) {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/<?= $team["img_card"]; ?>" class="img-fluid" width="600">
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info bg-infinity">
                                <h4> <?= $team["nama_lengkap"]; ?> </h4>
                                <span class="text-light"><?= $team["nama_jabatan"]; ?> Infinity Project Property</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <!-- Section Staff IT Support -->
                <div class="row justify-content-center">

                    <?php
                    $queryTeam = mysqli_query($conn, "SELECT * FROM tb_landing_team
                                                    INNER JOIN tb_jabatan
                                                    ON tb_landing_team.id_jabatan = tb_jabatan.id 
                                                    WHERE id_jabatan IN (7)");
                    while ($team = mysqli_fetch_assoc($queryTeam)) {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/<?= $team["img_card"]; ?>" class="img-fluid" width="600">
                                <div class="social">
                                    <a href="<?= $team["fb_link"]; ?>"><i class="bi bi-facebook"></i></a>
                                    <a href="<?= $team["wa_link"]; ?>"><i class="bi bi-whatsapp"></i></a>
                                    <a href="<?= $team["ig_link"]; ?>"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info bg-infinity">
                                <h4><?= $team["nama_lengkap"]; ?></h4>
                                <span class="text-light"><?= $team["nama_jabatan"]; ?> Infinity Project Property</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>

                <div class="row mt-5">
                    <div class="section-title">
                        <h3>Marketing & Freelancer <br> <span style="color: #E1AE00;">Infinity</span> Project Property</h3>
                    </div>
                    <?php
                    $queryTeam = mysqli_query($conn, "SELECT * FROM tb_landing_team
                                                    INNER JOIN tb_jabatan
                                                    ON tb_landing_team.id_jabatan = tb_jabatan.id 
                                                    WHERE id_jabatan IN (10,11)");
                    while ($team = mysqli_fetch_assoc($queryTeam)) {
                    ?>

                    <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/<?= $team["img_card"]; ?>" class="img-fluid" width="600">
                                <div class="social">
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info bg-infinity">
                                <h4> <?= $team["nama_lengkap"]; ?> </h4>
                                <span class="text-light"><?= $team["nama_jabatan"]; ?> Infinity</span>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>

            </div>
</section>
<!-- End Team Section -->


<?php
    require 'layouts/footer_app.php';
?>
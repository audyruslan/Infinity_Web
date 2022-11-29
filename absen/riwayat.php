<?php
$title = "Riwayat Presensi - Absen Infinity";
require 'layouts/header.php';
require 'layouts/navbar.php';

// Get Data Presensi
$id_user = $_SESSION["id"];
$query = mysqli_query($conn, "SELECT * FROM tb_presensi 
                            JOIN tb_users
                            ON tb_presensi.id_user = tb_users.id
                            WHERE id_user = '$id_user'");
$presensi = mysqli_fetch_assoc($query);
?>

<div class="content-header mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-center">Riwayat Absensi</h5>
            </div>
        </div>

        <div class="row">
            <?php
            if (!isset($presensi["id_user"])) {
            ?>
            <h5 class="text-center text-muted">Belum Ada Riwayat Absensi</h5>
            <?php
            } else {
            ?>
            <?php
                foreach ($presensi as $row) :
                ?>
            <div class="col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?= $row["ket_presensi"]; ?></span>
                        <span class="info-box-number"><?= $row["tgl_presensi"]; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <?php endforeach; ?>
            <?php
            }
            ?>

        </div>
    </div>
</div>


<?php
require 'layouts/menu_bottom.php';
require 'layouts/footer.php';
?>
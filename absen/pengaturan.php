<?php
$title = "Pengaturan Akun - Absen Infinity";
require 'layouts/header.php';
require 'layouts/navbar.php';

$id_user = $_SESSION["id"];
// Get Data Presensi Hadir
$hadir_presensi = mysqli_num_rows(mysqli_query($conn, "SELECT hadir_presensi FROM tb_presensi 
                            JOIN tb_users
                            ON tb_presensi.id_user = tb_users.id
                            WHERE id_user = '$id_user' AND hadir_presensi != 0"));
// Get Data Presensi Izin
$izin_presensi = mysqli_num_rows(mysqli_query($conn, "SELECT izin_presensi FROM tb_presensi 
                            JOIN tb_users
                            ON tb_presensi.id_user = tb_users.id
                            WHERE id_user = '$id_user' AND izin_presensi != 0"));
// Get Data Presensi Alpa
$alpa_presensi = mysqli_num_rows(mysqli_query($conn, "SELECT alpa_presensi FROM tb_presensi 
                            JOIN tb_users
                            ON tb_presensi.id_user = tb_users.id
                            WHERE id_user = '$id_user' AND alpa_presensi != 0"));
// Get Data Presensi Sakit
$sakit_presensi = mysqli_num_rows(mysqli_query($conn, "SELECT sakit_presensi FROM tb_presensi 
                            JOIN tb_users
                            ON tb_presensi.id_user = tb_users.id
                            WHERE id_user = '$id_user' AND sakit_presensi != 0"));
?>

<div class="content-header mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-dark">
                        <h3 class="widget-user-username"><?= $admin["nama_lengkap"]; ?></h3>
                        <h5 class="widget-user-desc"><?= $jabatan["nama_jabatan"]; ?></h5>
                    </div>
                    <!-- Button trigger modal -->

                    <div class="widget-user-image" data-toggle="modal" data-target="#editProfileModal">
                        <img class="img-circle elevation-2" src="../assets/img/avatar.png" alt="User Avatar">
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="config/edit_profile.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $id_user; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="nama_lengkap" autocomplete="off" class="form-control"
                                                id="nama_lengkap" name="nama_lengkap"
                                                value="<?= $admin["nama_lengkap"]; ?>"
                                                placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="username" autocomplete="off" class="form-control" id="username"
                                                name="username" value="<?= $admin["username"]; ?>"
                                                placeholder="Masukkan Username" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" autocomplete="off" class="form-control" id="email"
                                                value="<?= $admin["email"]; ?>" name="email"
                                                placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No. Handphone</label>
                                            <input type="no_hp" autocomplete="off" class="form-control" id="no_hp"
                                                value="<?= $admin["no_hp"]; ?>" name="no_hp"
                                                placeholder="Masukkan No. Handphone">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" cols="30"
                                                placeholder="Masukkan Alamat"><?= $admin["alamat"]; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Kembali</button>
                                        <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3 border-right">
                                <div class="description-block">
                                    <h5 class="description-header"><?= $hadir_presensi; ?></h5>
                                    <span class="description-text text-primary"><b>Hadir</b></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-3 border-right">
                                <div class="description-block">
                                    <h5 class="description-header"><?= $izin_presensi; ?></h5>
                                    <span class="description-text text-success"><b>Izin</b></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-3 border-right">
                                <div class="description-block">
                                    <h5 class="description-header"><?= $alpa_presensi; ?></h5>
                                    <span class="description-text text-danger"><b>Alpa</b></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-3">
                                <div class="description-block">
                                    <h5 class="description-header"><?= $sakit_presensi; ?></h5>
                                    <span class="description-text text-warning"><b>Sakit</b></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <strong><i class="fas fa-user mr-1"></i> Username</strong>

                                <p class="text-muted">
                                    <?= $admin["username"]; ?>
                                </p>

                                <hr>
                                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                                <p class="text-muted">
                                    <?= $admin["email"]; ?>
                                </p>

                                <hr>
                                <strong><i class="fas fa-call mr-1"></i> No. Handphone</strong>

                                <p class="text-muted">
                                    <?= $admin["no_hp"]; ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                                <p class="text-muted"><?= $admin["alamat"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p class="text-muted">All Settings</p>
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="logout.php" class="nav-link text-dark">
                                            <i class="nav-icon fas fa-sign-out-alt"></i> Logout
                                            <i class="right fas fa-angle-right float-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require 'layouts/menu_bottom.php';
require 'layouts/footer.php';
?>
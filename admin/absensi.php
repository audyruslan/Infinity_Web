<?php
session_start();
$title = "Absensi Karyawan - Infinity Project Property";
require '../functions.php';
require 'layouts/header.php';
require 'layouts/navbar.php';
if (!isset($_SESSION["username"])) {
    echo '<script>
                alert("Mohon login dahulu !");
                window.location="' . $base_url . '/";
             </script>';
    return false;
}

if ($_SESSION["role"] != "1") {
    echo '<script>
                alert("Maaf Anda Tidak Berhak Ke Halaman ini !");
                window.location="' . $base_url . '/' . $_SESSION["role"] . '/";
             </script>';
    return false;
}
$username = $_SESSION["username"];
$query = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username'");
$admin = mysqli_fetch_assoc($query);
require 'layouts/sidebar.php';
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Control Absensi Karyawan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Absensi Karyawan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <hr>
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-secondary">
                <div class="row">
                    <div class="col-12">

                        <div class="col-12">
                            <table class="table table-bordered table-hover" id="preferensi" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Karyawan</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $jabatan = mysqli_fetch_assoc($query);
                                $sql = mysqli_query($conn, "SELECT * FROM tb_jabatan
                                                            INNER JOIN tb_users
                                                            ON tb_jabatan.id = tb_users.jabatan");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['nama_jabatan']; ?></td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm" href="#"><i class="fas fa-joystick"></i></a>
                                        <a target="_blank" class="btn btn-info btn-sm ubah"
                                            href="absensi_detail.php?id=<?= $row["id"]; ?>"><i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModal<?= $row["id"]; ?>"><i class="fas fa-edit"></i> </a>
                                        <a class="btn btn-danger btn-sm hapus_jabatan"
                                            href="jabatan/hapus.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                    </td>

                                    <!-- Lihat Data -->
                                    <div class="modal fade" id="LihatModal<?= $row["id"]; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Laporan Harian</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="absensi/edit_time.php" method="post">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="../assets/img/logo.jpg" alt="Logo" width="200"
                                                                    class="fluid-image rounded">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h3><?= $row["nama_lengkap"]; ?></h3>
                                                                <h5><b><?= $row["nama_jabatan"]; ?></b></h5>
                                                                <p>Jln.SoekarnoHatta, BTN Layana View Residance, No.13
                                                                    BLOK B11</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">

                                                                <!-- THE CALENDAR -->
                                                                <div id="calendarAbsens"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Kembali</button>
                                                        <button type="submit" name="ubah"
                                                            class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Edit Data -->
                                    <div class="modal fade" id="EditModal<?= $row["id"]; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Laporan Harian</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="absensi/edit_time.php" method="post">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="../assets/img/logo.jpg" alt="Logo" width="200"
                                                                    class="fluid-image rounded">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h3><?= $row["nama_lengkap"]; ?></h3>
                                                                <h5><b><?= $row["nama_jabatan"]; ?></b></h5>
                                                                <p>Jln.SoekarnoHatta, BTN Layana View Residance, No.13
                                                                    BLOK B11</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Kembali</button>
                                                        <button type="submit" name="ubah"
                                                            class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <?php $i++; ?>

                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require 'layouts/footer.php'; ?>
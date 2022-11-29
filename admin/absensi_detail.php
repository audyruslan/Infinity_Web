<?php
session_start();
$title = "Control Absensi Karyawan - Infinity Project Property";
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

$id = $_GET["id"];
$absensi = query("SELECT * FROM tb_users WHERE id = $id")[0];
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
                        <li class="breadcrumb-item active">Control Absensi Karyawan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <hr>
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <h3>Absen <b><?= $absensi["nama_lengkap"]; ?></b></h3>
                        <!-- Button trigger modal -->
                        <!--<button type="button" class="btn btn-primary ml-auto mb-3" data-toggle="modal"-->
                        <!--    data-target="#exampleModal">-->
                        <!--    Tambah Data-->
                        <!--</button>-->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="absensi/add_time.php" method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="<?= $absensi["id"]; ?>">
                                            <input type="hidden" name="id_user" value="<?= $absensi["id"]; ?>">
                                            <input type="hidden" name="id_jabatan" value="<?= $absensi["jabatan"]; ?>">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tgl_presensi">Tanggal Absen</label>
                                                        <input type="date" class="form-control" name="tgl_presensi"
                                                            id="tgl_presensi">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="time_presensi">Waktu Absen</label>
                                                        <input type="time" class="form-control" name="time_presensi"
                                                            id="time_presensi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Kembali</button>
                                            <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-outline card-secondary">
                        <table class="table table-bordered table-hover" id="absensi" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Absensi</th>
                                    <th>Tanggal Absensi</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <?php
                            $i = 1;
                            $jabatan = mysqli_fetch_assoc($query);
                            $sql = mysqli_query($conn,  "SELECT * FROM tb_users
                                                            INNER JOIN tb_jabatan
                                                            ON tb_users.jabatan = tb_jabatan.id
                                                            INNER JOIN tb_presensi
                                                            ON tb_users.id = tb_presensi.id_user
                                                            WHERE id_user = '$id'");
                            while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= date('H:i', strtotime($row["time_presensi"])); ?></td>
                                <td><?= tgl_indo($row['tgl_presensi']); ?></td>
                                <td><?= $row['ket_presensi']; ?></td>
                                <!--<td>-->
                                <!--    <a class="btn btn-success btn-sm ubah" data-toggle="modal"-->
                                <!--        data-target="#EditModal<?= $row["id"]; ?>"><i class="fas fa-edit"></i> </a>-->
                                <!--</td>-->

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
                                                <input type="hidden" name="id_user" value="<?= $row["id_user"]; ?>">
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

                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="tgl_presensi">Tanggal Absen</label>
                                                                <input type="date" class="form-control"
                                                                    name="tgl_presensi"
                                                                    value="<?= date('Y-m-d', strtotime($row["tgl_presensi"])); ?>"
                                                                    id="tgl_presensi">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="time_presensi">Waktu Absen</label>
                                                                <input type="time" class="form-control"
                                                                    name="time_presensi"
                                                                    value="<?= date('H:i', strtotime($row["time_presensi"])); ?>"
                                                                    id="time_presensi">
                                                            </div>
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

                <div class="col-md-6">
                    <div class="card card-outline card-secondary">
                        <div id="calendarControl"></div>
                        <!-- Modal -->
                        <div class="modal fade" id="CalendarModal" tabindex="-1" role="dialog"
                            aria-labelledby="CalendarModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="CalendarModalLabel">Detail Absensi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <h5 class="float-left" id="tanggalP"></h5>
                                            <h5 class="float-right" id="timeP"></h5><br>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="../assets/img/logo.jpg" alt="Logo" width="200"
                                                    class="fluid-image rounded">
                                            </div>
                                            <div class="col-md-6">
                                                <h3><?= $absensi["nama_lengkap"]; ?></h3>
                                                <h5><b><?= $absensi["jabatan"]; ?></b></h5>
                                                <p>Jln.SoekarnoHatta, BTN Layana View Residance, No.13 BLOK B11</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" id="keteranganP" cols="30"
                                                readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>

<?php
require 'layouts/footer.php'; ?>
<?php
session_start();
$title = "Laporan Mingguan - Infinity Project Property";
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
require 'layouts/sidebar.php'; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Laporan Mingguan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Laporan Mingguan</li>
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
                    <div class="col">
                        <!-- Button trigger modal -->
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary ml-2 mt-3 mb-3" data-toggle="modal"
                                data-target="#tambahModal">
                                Tambah Data
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Laporan Mingguan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="laporan/laporan_mingguan_add.php" method="post">
                                        <input type="hidden" name="id_user" value="<?= $admin["id"]; ?>">
                                        <input type="hidden" name="id_jabatan" value="<?= $jabatan["id"]; ?>">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="../assets/img/logo.jpg" alt="Logo" width="200"
                                                        class="fluid-image rounded">
                                                </div>
                                                <div class="col-md-6">
                                                    <h3><?= $admin["nama_lengkap"]; ?></h3>
                                                    <h5><b><?= $jabatan["nama_jabatan"]; ?></b></h5>
                                                    <p>Jln.SoekarnoHatta, BTN Layana View Residance, No.13 BLOK B11</p>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tgl_laporan">Tanggal</label>
                                                        <input type="date" class="form-control" name="tgl_laporan"
                                                            id="tgl_laporan">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="keterangan_mingguan">Keterangan</label>
                                                        <select class="form-control" name="keterangan_mingguan"
                                                            id="keterangan_mingguan">
                                                            <option value="">--Silahkan Pilih--</option>
                                                            <option value="Revisi">Revisi</option>
                                                            <option value="Selesai">Selesai</option>
                                                            <option value="Tanggal Merah">Tanggal Merah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="kegiatan_mingguan">Kegiatan</label>
                                                        <textarea class="form-control" name="kegiatan_mingguan"
                                                            id="kegiatan_mingguan" cols="30" cols="8"></textarea>
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
                        <div class="col-12">
                            <table class="table table-bordered table-hover" id="preferensi" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Hari/Tanggal</th>
                                        <th>Kegiatan</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_laporan_mingguan");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= tgl_indo($row['tgl_laporan']); ?></td>
                                    <td><?= $row['kegiatan_mingguan']; ?></td>
                                    <td><?= $row['keterangan_mingguan']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModal<?= $row["id"]; ?>"><i class="fas fa-edit"></i> </a>
                                        <a class="btn btn-danger btn-sm hapus_laporanMingguan"
                                            href="laporan/laporan_mingguan_delete.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditModal<?= $row["id"]; ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="#EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit Laporan Mingguan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="laporan/laporan_mingguan_edit.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <input type="hidden" name="id_user" value="<?= $admin["id"]; ?>">
                                                    <input type="hidden" name="id_jabatan"
                                                        value="<?= $jabatan["id"]; ?>">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="../assets/img/logo.jpg" alt="Logo" width="200"
                                                                class="fluid-image rounded">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3><?= $admin["nama_lengkap"]; ?></h3>
                                                            <h5><b><?= $jabatan["nama_jabatan"]; ?></b></h5>
                                                            <p>Jln.SoekarnoHatta, BTN Layana View Residance, No.13 BLOK
                                                                B11</p>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="tgl_laporan">Tanggal</label>
                                                                <input type="date" class="form-control"
                                                                    name="tgl_laporan"
                                                                    value="<?= date('Y-m-d', strtotime($row["tgl_laporan"])); ?>"
                                                                    id="tgl_laporan">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="keterangan_mingguan">Keterangan</label>
                                                                <select class="form-control" name="keterangan_mingguan"
                                                                    id="keterangan_mingguan">
                                                                    <option value="">--Silahkan Pilih--</option>
                                                                    <?= ($row['keterangan_mingguan'] == 'Revisi') ? ' selected="selected"' : ''; ?>>
                                                                    Revisi</option>
                                                                    <option value="Selesai"
                                                                        <?= ($row['keterangan_mingguan'] == 'Selesai') ? ' selected="selected"' : ''; ?>>
                                                                        Selesai</option>
                                                                    <option value="Tanggal Merah"
                                                                        <?= ($row['keterangan_mingguan'] == 'Tanggal Merah') ? ' selected="selected"' : ''; ?>>
                                                                        Tanggal Merah</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="kegiatan_mingguan">Kegiatan</label>
                                                                <textarea class="form-control" name="kegiatan_mingguan"
                                                                    id="kegiatan_mingguan" cols="30"
                                                                    cols="8"><?= $row["kegiatan_mingguan"]; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Kembail</button>
                                                    <button type="submit" name="ubah"
                                                        class="btn btn-success">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
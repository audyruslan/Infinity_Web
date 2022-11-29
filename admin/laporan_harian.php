<?php
session_start();
$title = "Laporan Rutinitas Harian - Infinity Project Property";
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
                    <h1 class="m-0">Data Laporan Rutinitas Harian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Laporan Rutinitas Harian</li>
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

                            <!-- <div class="margin ml-auto mt-3 mr-5">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><i class="fas fa-file-export"></i> Export</button>
                  <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#"><i class="fas fa-print"></i> Print</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-word"></i> Word</a>
                    <a class="dropdown-item" target="_blank" href="laporan/cetak_laporan_harian.php"><i
                        class="fas fa-file-pdf"></i> Pdf</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Excel</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Preveiw
                      <i class="fas fa-angle-right"></i></a>
                  </div>
                </div>
              </div> -->
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Laporan Rutinitas Harian</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="laporan/laporan_harian_add.php" method="post">
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
                                                        <label for="percent_progress">Progress Percent</label>
                                                        <select class="form-control" name="percent_progress"
                                                            id="percent_progress">
                                                            <option>-- Silahkan Pilih --</option>
                                                            <option value="20%">Progress 20 %</option>
                                                            <option value="80%">Progress 80 %</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="time_progress">Waktu Progress</label>
                                                        <input type="time" class="form-control" name="time_progress"
                                                            id="time_progress">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="det_progress">Detail Progress</label>
                                                        <textarea class="form-control" name="det_progress"
                                                            id="det_progress" cols="30" rows="5"></textarea>
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
                                        <th>Waktu Progress</th>
                                        <th>Detail Progress</th>
                                        <th>Percent Progress</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_laporan_harian");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row['time_progress']; ?></td>
                                    <td><?= $row['det_progress']; ?></td>
                                    <td><?= $row['percent_progress']; ?></td>
                                    <td>
                                        <a class="btn btn-danger btn-sm hapus_laporanHarian"
                                            href="laporan/laporan_harian_delete.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
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
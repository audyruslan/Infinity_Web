<?php
session_start();
$title = "Laporan KPI - Infinity Project Property";
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
                    <h1 class="m-0">Data Laporan KPI</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Laporan KPI</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <hr>
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3><strong>KPI</strong></h3>
                            <h3><strong>(Key Performance Key)</strong></h3>
                        </div>
                        <h4>
                            <small class="float-right">Date: 2/10/2014</small>
                        </h4>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <address>
                            <strong>Nama : Audy Ruslan</strong><br>
                            <strong>Posisi : IT Support</strong><br>
                            <strong>Gaji : </strong><br>
                            <strong>Insentif : </strong><br>
                            <strong>Reward :</strong><br>
                        </address>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-12 table-responsive">
                        <button class="btn btn-primary float-right mb-2" data-toggle="modal"
                            data-target="#tambahModal"><i class="fas fa-plus"></i> Tambah
                            Data</button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah KPI</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="laporan/laporan_kpi_add.php" method="post">
                                        <input type="hidden" name="id_user" value="<?= $admin["id"]; ?>">
                                        <input type="hidden" name="id_jabatan" value="<?= $jabatan["id"]; ?>">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="deskripsi_kpi">Deskripsi</label>
                                                        <textarea class="form-control" name="deskripsi_kpi"
                                                            id="deskripsi_kpi" placeholder="Masukkan Deskripsi"
                                                            cols="30"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="target_kpi">Target KPI</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="target_kpi" name="target_kpi"
                                                            placeholder="Masukkan Target KPI">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="aktual_kpi">Aktual KPI</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="aktual_kpi" name="aktual_kpi"
                                                            placeholder="Masukkan Aktual KPI">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="bobot_kpi">Bobot KPI</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="bobot_kpi" name="bobot_kpi"
                                                            placeholder="Masukkan Bobot KPI">
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Deskripsi</th>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                    <th>Bobot</th>
                                    <th>SA</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_laporan_kpi");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row['deskripsi_kpi']; ?></td>
                                    <td><?= $row['target_kpi']; ?></td>
                                    <td><?= $row['aktual_kpi']; ?></td>
                                    <td><?= $row['percent_kpi']; ?></td>
                                    <td><?= $row['bobot_kpi']; ?></td>
                                    <td><?= $row['skor_kpi']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModal<?= $row['id']; ?>"><i class="fas fa-edit"></i> </a>
                                        <a class="btn btn-danger btn-sm hapus_jabatan" href="jabatan/hapus.php?id="><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditModal<?= $row["id"]; ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="#EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Ubah Jabatan / Posisi</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="jabatan/ubah.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <div class="form-group">
                                                        <label for="nama_jabatan">Jabatan / Posisi</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="nama_jabatan" name="nama_jabatan"
                                                            value="<?= $row["nama_jabatan"]; ?>"
                                                            placeholder="Nama Jabatan / Posisi">
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
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                        <p class="lead">Kondisi:</p>
                        <h5><strong>> 100% Reward</strong></h5>
                        <h5><strong>> 90% Insentif</strong></h5>
                        <h5><strong>> 80% Gaji</strong></h5>
                    </div>
                    <!-- /.col -->
                    <div class="col-6 float-right">
                        <p class="lead">Keterangan:</p>
                        <h5><strong>T : Target</strong></h5>
                        <h5><strong>A : Aktual</strong></h5>
                        <h5><strong>% : Percentase</strong></h5>
                        <h5><strong>SA : Skor Akhir</strong></h5>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-12">
                        <a href="invoice-print.html" rel="noopener" target="_blank"
                            class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require 'layouts/footer.php'; ?>
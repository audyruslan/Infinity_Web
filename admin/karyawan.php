<?php
session_start();
$title = "Data Karyawan - Infinity Project Property";
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
                    <h1 class="m-0">Data Karyawan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Karyawan</li>
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
                        <button type="button" class="btn btn-primary ml-2 mt-3 mb-3" data-toggle="modal"
                            data-target="#tambahModal">
                            Tambah Data Karyawan
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="karyawan/tambah.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                                <input type="text" autocomplete="off"
                                                                    class="form-control" id="nama_lengkap"
                                                                    name="nama_lengkap" placeholder="Nama Lengkap">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                <select class="form-control" name="jenis_kelamin"
                                                                    id="jenis_kelamin">
                                                                    <option>--Silahkan Pilih--</option>
                                                                    <option value="Lak-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="jabatan">Jabatan</label>
                                                                <select class="form-control" name="jabatan"
                                                                    id="jabatan">
                                                                    <option>--Silahkan Pilih--</option>
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * FROM tb_jabatan");
                                                                    while ($jabatan = mysqli_fetch_assoc($sql)) {
                                                                    ?>
                                                                    <option value="<?= $jabatan["id"]; ?>">
                                                                        <?= $jabatan["nama_jabatan"]; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" autocomplete="off"
                                                                    class="form-control" id="username" name="username"
                                                                    placeholder="Masukkan Username">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="text" autocomplete="off"
                                                                    class="form-control" id="password" name="password"
                                                                    placeholder="Masukkan Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="role">Role</label>
                                                                <select class="form-control" name="role" id="role">
                                                                    <option>--Silahkan Pilih--</option>
                                                                    <option value="1">Admin</option>
                                                                    <option value="2">User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="gambar">Image Profile</label>
                                                        <div class="form-group">
                                                            <div class="drop-zone">
                                                                <span class="drop-zone__prompt"><i
                                                                        class="fas fa-upload"></i> Drop file here or
                                                                    click to upload</span>
                                                                <input type="file" name="gambar" id="gambar"
                                                                    class="drop-zone__input">
                                                            </div>
                                                        </div>
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
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_users");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModalKaryawan<?= $row["id"]; ?>"><i
                                                class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm hapus_users"
                                            href="karyawan/hapus.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                        <a class="btn btn-info btn-sm ubah" data-toggle="modal"
                                            data-target="#DetailModalKaryawan<?= $row["id"]; ?>"><i
                                                class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditModalKaryawan<?= $row["id"]; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="#EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit Data Karyawan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="karyawan/ubah.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama lengkap</label>
                                                        <input type="text" class="form-control"
                                                            value="<?= $row["nama_lengkap"]; ?>"
                                                            placeholder="Nama Lengkap"
                                                            value="<?= $row['nama_lengkap'] ?>" autocomplete="off"
                                                            name="nama_lengkap" id="nama_lengkap">
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

                                <!-- Detail Modal -->
                                <div class="modal fade" id="DetailModalKaryawan<?= $row["id"]; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="#EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Detail Data Karyawan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="nama_lengkap">Nama lengkap</label>
                                                    <input type="text" class="form-control"
                                                        value="<?= $row["nama_lengkap"]; ?>" placeholder="Nama Lengkap"
                                                        value="<?= $row['nama_lengkap'] ?>" autocomplete="off"
                                                        name="nama_lengkap" id="nama_lengkap">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Kembail</button>
                                            </div>
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
<?php
session_start();
$title = "Profile - Infinity Project Property";
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
                    <h1 class="m-0">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <hr>
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../dist/img/avatar.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $admin["nama_lengkap"]; ?></h3>

                            <p class="text-muted text-center"><?= $jabatan["nama_jabatan"]; ?></p>

                            <hr>

                            <strong><i class="fas fa-user mr-1"></i> Username</strong>

                            <p class="text-muted"><?= $admin["username"]; ?></p>

                            <hr>

                            <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                            <p class="text-muted"><?= $admin["email"]; ?></p>

                            <hr>

                            <strong><i class="fas fa-envelope mr-1"></i> No. Handphone</strong>

                            <p class="text-muted"><?= $admin["no_hp"]; ?></p>

                            <hr>
                            <strong><i class="fas fa-envelope mr-1"></i> Jenis Kelamin</strong>

                            <p class="text-muted"><?= $admin["jenis_kelamin"]; ?></p>

                            <hr>
                            <strong><i class="fas fa-envelope mr-1"></i> Alamat</strong>

                            <p class="text-muted"><?= $admin["alamat"]; ?></p>

                            <hr>

                            <!-- Button Edit Data Saya -->
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editModalSaya">
                                Edit Data
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="editModalSaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Saya</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="akun/edit.php" method="post">
                                            <div class="modal-body">
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username'");
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                ?>
                                                    <div class="row">
                                                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $row["id"]; ?>">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                                <input type="text" autocomplete="off" value="<?= $row["nama_lengkap"]; ?>" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" autocomplete="off" value="<?= $row["username"]; ?>" class="form-control" id="username" name="username" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="text" autocomplete="off" value="<?= $row["email"]; ?>" class="form-control" id="email" name="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="no_hp">No. Handphone</label>
                                                                <input type="text" autocomplete="off" value="<?= $row["no_hp"]; ?>" class="form-control" id="no_hp" name="no_hp" placeholder="No. Handphone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat Lengkap</label>
                                                                <textarea class="form-control" name="alamat" id="alamat" cols="30"><?= $row["alamat"]; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tentang Saya</h3>

                            <div class="card-tools">
                                <!-- Button Edit Tentang Saya -->
                                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#editModalTentangSaya">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="editModalTentangSaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalTentang" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalTentang">Edit Tentang Saya</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="karyawan/tambah.php" method="post">
                                            <div class="modal-body">
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * FROM tb_det_users WHERE username = '$username'");
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                ?>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label for="education">Education</label>
                                                            <textarea class="form-control" name="education" id="education" cols="30"><?= $row["education"]; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="location">Location</label>
                                                            <textarea class="form-control" name="location" id="location" cols="30"><?= $row["location"]; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="skill">Skill</label>
                                                            <textarea class="form-control" name="skill" id="skill" cols="30"><?= $row["skill"]; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="notes">Notes</label>
                                                            <textarea class="form-control" name="notes" id="notes" cols="30"><?= $row["notes"]; ?></textarea>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" name="tambah" class="btn btn-success">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
</div>

<?php
require 'layouts/footer.php'; ?>
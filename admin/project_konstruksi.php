<?php
session_start();
$title = "Project Design - Infinity Project Property";
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
                    <h1 class="m-0">Project Design Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Project Design Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <hr>
        </div><!-- /.container-fluid -->
    </div>

    <!-- Jumbotron -->
    <section class="content">
        <div class="container-fluid">
            <h5># Jumbotron Area</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Jumbotron</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="col-12">
                                <table class="table table-bordered table-hover" id="preferensi" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Deskripsi Jumbotron Kontruksi</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_jumbotron_konstruksi");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['desk_kontruksi']; ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                                data-target="#EditModal<?= $row["id"]; ?>"><i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditModal<?= $row["id"]; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="#EditModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="EditModalLabel">Edit Jumbotron
                                                        Konstruksi
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="landing_konstruksi/edit_jumbotron.php" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                        <div class="form-group">
                                                            <label for="desk_konstruksi">Deskripsi Jumbotron</label>
                                                            <textarea class="form-control" name="desk_konstruksi"
                                                                id="desk_konstruksi" cols="30"
                                                                rows="10"><?= $row["desk_kontruksi"]; ?></textarea>
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

                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="content">
        <div class="container-fluid">
            <!-- By support -->
            <h5># Gallery Konstruksi</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Gallery Konstruksi</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary ml-2 mb-3" data-toggle="modal"
                            data-target="#tambahModal">
                            Tambah Gallery
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery Konstruksi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="landing_konstruksi/tambah_img.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="img_konstruksi">Image Konstruksi</label>
                                                <div class="form-group">
                                                    <div class="drop-zone">
                                                        <span class="drop-zone__prompt"><i class="fas fa-upload"></i>
                                                            Drop file here or click to upload</span>
                                                        <input type="file" name="img_konstruksi" id="img_konstruksi"
                                                            class="drop-zone__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea class="form-control" name="keterangan" id="keterangan"
                                                    cols="30"></textarea>
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
                    <div class="row">
                        <?php
                        $sqlLogo = mysqli_query($conn, "SELECT * FROM tb_gallery_konstruksi");
                        while ($logo = mysqli_fetch_assoc($sqlLogo)) {
                        ?>
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid-top" style="width: 18rem; height:18rem;"
                                    src="../assets/img/konstruksi/<?= $logo['image_konstruksi']; ?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>

    <!-- Testimonial -->
    <section class="content">
        <div class="container-fluid">
            <h5># Testimonial Area</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Testimonial</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary ml-2 mb-3" data-toggle="modal"
                            data-target="#tambahModalTesti">
                            Tambah Data
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModalTesti" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Testimonial</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="landing/tambah_testi.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama lengkap</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Nama Lengkap" autocomplete="off"
                                                            name="nama_lengkap" id="nama_lengkap">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                                            autocomplete="off" name="pekerjaan" id="pekerjaan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ulasan">Ulasan</label>
                                                        <textarea class="form-control" autocomplete="off" name="ulasan"
                                                            id="ulasan" cols="30"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="testi">Image Profile</label>
                                                        <div class="form-group">
                                                            <div class="drop-zone">
                                                                <span class="drop-zone__prompt"><i
                                                                        class="fas fa-upload"></i> Drop file here or
                                                                    click to upload</span>
                                                                <input type="file" name="testi" id="testi"
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
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-hover" id="preferensi" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Image Testi</th>
                                        <th>Nama Lengkap</th>
                                        <th>Ulasan</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_landing_testi");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><img width="80" class="img-fluid"
                                            src="../assets/img/testimonials/<?= $row['img_testi']; ?>"></td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['ulasan']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModalTesti<?= $row["id"]; ?>"><i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm hapus_testi"
                                            href="landing/hapus_testi.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditModalTesti<?= $row["id"]; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="#EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit Home Landing
                                                    Testimonial</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="landing/edit_testi.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama lengkap</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Nama Lengkap"
                                                            value="<?= $row['nama_lengkap'] ?>" autocomplete="off"
                                                            name="nama_lengkap" id="nama_lengkap">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <input type="text" class="form-control" placeholder="Pekerjaan"
                                                            value="<?= $row['pekerjaan'] ?>" autocomplete="off"
                                                            name="pekerjaan" id="pekerjaan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ulasan">Ulasan</label>
                                                        <textarea class="form-control" autocomplete="off" name="ulasan"
                                                            id="ulasan" cols="30"><?= $row['ulasan'] ?></textarea>
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
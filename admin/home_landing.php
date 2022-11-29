<?php
session_start();
$title = "Home Landing Page - Infinity Project Property";
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
                    <h1 class="m-0">Home Landing Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Home Landing Page</li>
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
                                            <th>Heading 01</th>
                                            <th>Heading 02</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_landing_jumbotron");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['heading_1']; ?></td>
                                        <td><?= $row['heading_2']; ?></td>
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
                                                    <h5 class="modal-title" id="EditModalLabel">Edit Home Landing
                                                        Jumbotron</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="landing/edit_jumbotron.php" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                        <div class="form-group">
                                                            <label for="heading_1">Heading 01</label>
                                                            <textarea class="form-control" name="heading_1"
                                                                id="heading_1"
                                                                cols="30"><?= $row["heading_1"]; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="heading_2">Heading 02</label>
                                                            <textarea class="form-control" name="heading_2"
                                                                id="heading_2"
                                                                cols="30"><?= $row["heading_2"]; ?></textarea>
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

    <!-- About Area -->
    <section class="content">
        <div class="container-fluid">
            <h5># About Area</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">About</h3>

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
                                            <th>About1</th>
                                            <th>About2</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM tb_landing_about");
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['about_1']; ?></td>
                                        <td><?= $row['about_2']; ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                                data-target="#EditModalAbout<?= $row["id"]; ?>"><i
                                                    class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditModalAbout<?= $row["id"]; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="#EditModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="EditModalLabel">Edit Home Landing
                                                        About</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="landing/edit_about.php" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                        <div class="form-group">
                                                            <label for="about_1">About 01</label>
                                                            <textarea class="form-control" name="about_1" id="about_1"
                                                                cols="30" rows="5"><?= $row["about_1"]; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="about_2">About 02</label>
                                                            <textarea class="form-control" name="about_2" id="about_2"
                                                                cols="30" rows="5"><?= $row["about_2"]; ?></textarea>
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

    <!-- By Support -->
    <section class="content">
        <div class="container-fluid">
            <!-- By support -->
            <h5># Logo By Support</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Logo By Support</h3>

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
                            Tambah Logo
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Logo by Support</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="landing/tambah_logo.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="logo">Logo by Support</label>
                                                <div class="form-group">
                                                    <div class="drop-zone">
                                                        <span class="drop-zone__prompt"><i class="fas fa-upload"></i>
                                                            Drop file here or click to upload</span>
                                                        <input type="file" name="logo" id="logo"
                                                            class="drop-zone__input">
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
                        <?php
                        $sqlLogo = mysqli_query($conn, "SELECT * FROM tb_landing_logo");
                        while ($logo = mysqli_fetch_assoc($sqlLogo)) {
                        ?>
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img class="img-fluid-top" style="width: 18rem; height:18rem;"
                                    src="../assets/img/client/<?= $logo['logo']; ?>">
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

    <!-- Our Team -->
    <section class="content">
        <div class="container-fluid">
            <h5># Team Area</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Our Team</h3>

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
                            data-target="#tambahModalTeam">
                            Tambah Data
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModalTeam" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Our Team</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="landing/tambah_team.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                                <input type="text" autocomplete="off"
                                                                    class="form-control" id="nama_lengkap"
                                                                    name="nama_lengkap" placeholder="Nama Lengkap">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
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
                                                    <hr>
                                                    <h5>Link Social Media</h5>
                                                    <div class="form-group">
                                                        <label for="fb_link">Facebook</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="fb_link" name="fb_link" placeholder="Link Facebook">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="wa_link">WhatsApp</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="wa_link" name="wa_link" placeholder="Link WhatsApp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ig_link">Instagram</label>
                                                        <input type="text" autocomplete="off" class="form-control"
                                                            id="ig_link" name="ig_link" placeholder="Link Instagram">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="card">ID Card</label>
                                                        <div class="form-group">
                                                            <div class="drop-zone">
                                                                <span class="drop-zone__prompt"><i
                                                                        class="fas fa-upload"></i> Drop file here or
                                                                    click to upload</span>
                                                                <input type="file" name="card" id="card"
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
                                        <th>ID Card</th>
                                        <th>Nama Lengkap</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_landing_team");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><img width="80" class="img-fluid"
                                            src="../assets/img/team/<?= $row['img_card']; ?>">
                                    </td>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModalTeam<?= $row["id"]; ?>"><i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm hapus_team"
                                            href="landing/hapus_team.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditModalTeam<?= $row["id"]; ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="#EditModalLabel" aria-hidden="true">
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
                                            <form action="landing/edit_team.php" method="post">
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
                                                    <div class="form-group">
                                                        <label for="jabatan">Jabatan</label>
                                                        <select class="form-control" name="jabatan" id="jabatan">
                                                            <option>--Silahkan Pilih--</option>
                                                            <?php
                                                                $sqlJabatan = mysqli_query($conn, "SELECT * FROM tb_jabatan");
                                                                while ($jabatan = mysqli_fetch_assoc($sqlJabatan)) {
                                                                ?>
                                                            <option value="<?= $jabatan["id"]; ?>">
                                                                <?= $jabatan["nama_jabatan"]; ?></option>
                                                            <?php } ?>
                                                        </select>
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
    </section>

    <!-- Faq -->
    <section class="content">
        <div class="container-fluid">
            <h5># Frequently Asked Questions Area</h5>
            <div class="card card-secondary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Frequently Asked Questions</h3>

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
                            data-target="#tambahModalFaq">
                            Tambah Data
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModalFaq" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Faq</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="landing/tambah_faq.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="questions">Questions</label>
                                                <input type="text" class="form-control" placeholder="Questions"
                                                    autocomplete="off" name="questions" id="questions">
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <input type="text" class="form-control" placeholder="Deskripsi"
                                                    autocomplete="off" name="deskripsi" id="deskripsi">
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
                                        <th>Questions</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_landing_faq");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row["questions"]; ?></td>
                                    <td><?= $row["deskripsi"]; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm ubah" data-toggle="modal"
                                            data-target="#EditModalFaq<?= $row["id"]; ?>"><i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm hapus_faq"
                                            href="landing/hapus_faq.php?id=<?= $row["id"]; ?>"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="EditModalFaq<?= $row["id"]; ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="#EditModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditModalLabel">Edit Home Landing FaQ
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="landing/edit_faq.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <div class="form-group">
                                                        <label for="questions">Questions</label>
                                                        <textarea class="form-control" name="questions"
                                                            autocomplete="off" placeholder="Questions" id="questions"
                                                            cols="30"><?= $row["questions"]; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsi">Deskripsi</label>
                                                        <textarea class="form-control" name="deskripsi"
                                                            autocomplete="off" placeholder="Deskripsi" id="deskripsi"
                                                            cols="30"><?= $row["deskripsi"]; ?></textarea>
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
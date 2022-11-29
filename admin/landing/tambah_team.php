<?php
session_start();
require '../../functions.php';

function tambah($data)
{
    global $conn;

    $nama_lengkap = $data['nama_lengkap'];
    $jabatan = $data['jabatan'];
    $fb_link = $data['fb_link'];
    $wa_link = $data['wa_link'];
    $ig_link = $data['ig_link'];
    $image_card = img_card();

    // tambahkan data ke database
    mysqli_query($conn, "INSERT INTO tb_landing_team
        VALUES
        ('','$jabatan','$nama_lengkap','$fb_link','$wa_link','$ig_link','$image_card')");

    return mysqli_affected_rows($conn);
}

//Jika Tombol Tambah Ditekan
if (isset($_POST["tambah"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Team";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../home_landing.php");
    } else {
        $_SESSION['status'] = "Data Team";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../home_landing.php");
    }
}
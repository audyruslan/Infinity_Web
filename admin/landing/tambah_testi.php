<?php
session_start();
require '../../functions.php';

function tambah($data)
{
    global $conn;

    $nama_lengkap = $data['nama_lengkap'];
    $pekerjaan = $data['pekerjaan'];
    $ulasan = $data['ulasan'];
    $image_testi = img_testi();

    // tambahkan data ke database
    mysqli_query($conn, "INSERT INTO tb_landing_testi
        VALUES
        ('','$nama_lengkap','$pekerjaan','$ulasan','$image_testi')");

    return mysqli_affected_rows($conn);
}

//Jika Tombol Tambah Ditekan
if (isset($_POST["tambah"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Testimonial";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../home_landing.php");
    } else {
        $_SESSION['status'] = "Data Testimonial";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../home_landing.php");
    }
}
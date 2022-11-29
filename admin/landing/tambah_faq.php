<?php
session_start();
require '../../functions.php';

function tambah($data)
{
    global $conn;

    $questions = $data["questions"];
    $deskripsi = $data["deskripsi"];

    // tambahkan data ke database
    mysqli_query($conn, "INSERT INTO tb_landing_faq
        VALUES
        ('','$questions','$deskripsi')");

    return mysqli_affected_rows($conn);
}

//Jika Tombol Tambah Ditekan
if (isset($_POST["tambah"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Frequently Asked Questions";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../home_landing.php");
    } else {
        $_SESSION['status'] = "Frequently Asked Questions";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../home_landing.php");
    }
}

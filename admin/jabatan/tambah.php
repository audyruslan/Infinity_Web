<?php
session_start();
require '../../functions.php';

function tambah($data)
{
    global $conn;

    $nama_jabatan = $data['nama_jabatan'];

    // tambahkan data ke database
    mysqli_query($conn, "INSERT INTO tb_jabatan
        VALUES
        ('','$nama_jabatan')");

    return mysqli_affected_rows($conn);
}

//Jika Tombol Tambah Ditekan
if (isset($_POST["tambah"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Jabatan / Posisi";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../jabatan.php");
    } else {
        $_SESSION['status'] = "Data Jabatan / Posisi";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../jabatan.php");
    }
}

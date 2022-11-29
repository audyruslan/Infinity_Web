<?php
session_start();
require '../../functions.php';

$id = $_GET["id"];

if (hapus_jabatan($id) > 0) {
    $_SESSION['status'] = "Data Jabatan / Posisi";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Dihapus";
    header("Location: ../jabatan.php");
} else {
    $_SESSION['status'] = "Data Jabatan / Posisi";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Dihapus";
    header("Location: ../jabatan.php");
}

<?php
session_start();
date_default_timezone_set('Asia/Makassar');
require '../functions.php';

function tambah($data)
{
    global $conn;

    $id_user = $data["id_user"];
    $id_jabatan = $data["id_jabatan"];
    $tgl_presensi = date("Y-m-d");
    $time_presensi = date("H:i:s");
    $hadir = $data["hadir"];
    $izin = "";
    $alpa = "";
    $sakit = "";
    $barcode = $data["ket_presensi"];
    $ket_presensi = "Masuk Kantor";

    $query = "INSERT INTO tb_presensi
                VALUES
                ('','$id_user','$id_jabatan','$tgl_presensi','$time_presensi','$hadir','$izin','$alpa','$sakit','$barcode','$ket_presensi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Presensi
if (isset($_POST["ket_presensi"])) {

    if (tambah($_POST)) {
        $_SESSION['status'] = "Absensi Berhasil";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Selamat Berkerja!";
        header("Location: ../index.php");
    } else {
        $_SESSION['status'] = "Presensi Berhasil";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Dikirm!";
        header("Location: ../index.php");
    }
}
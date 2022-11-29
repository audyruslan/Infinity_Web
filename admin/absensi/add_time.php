<?php
session_start();
date_default_timezone_set('Asia/Makassar');
require '../../functions.php';

function tambah($data)
{
    global $conn;

    $id_user = $data["id_user"];
    $id_jabatan = $data["id_jabatan"];
    $tgl_presensi = $data["tgl_presensi"];
    $time_presensi = $data["time_presensi"];
    $hadir = "1";
    $izin = "";
    $alpa = "";
    $sakit = "";
    $barcode = "https://qrco.de/bd41sG";
    $ket_presensi = "Masuk Kantor";

    $query = "INSERT INTO tb_presensi
                VALUES
                ('','$id_user','$id_jabatan','$tgl_presensi','$time_presensi','$hadir','$izin','$alpa','$sakit','$barcode','$ket_presensi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Presensi
if (isset($_POST["tambah"])) {

    $id = $_POST["id"];
    if (tambah($_POST)) {
        $_SESSION['status'] = "Absensi Berhasil";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Selamat Berkerja!";
        header("Location: ../absensi_detail.php?id=" . $id);
    } else {
        $_SESSION['status'] = "Presensi Berhasil";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Dikirm!";
        header("Location: ../absensi_detail.php?id=" . $id);
    }
}
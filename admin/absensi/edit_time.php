<?php
session_start();
date_default_timezone_set('Asia/Makassar');
require '../../functions.php';

function ubah_profile($data)
{
    global $conn;
    $id = $data["id"];
    $tgl_presensi = htmlspecialchars($data["tgl_presensi"]);
    $time_presensi = htmlspecialchars($data["time_presensi"]);

    $query = "UPDATE tb_presensi SET
				tgl_presensi = '$tgl_presensi',
				time_presensi = '$time_presensi'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    $id_user = $_POST["id_user"];
    if (ubah_profile($_POST) > 0) {
        $_SESSION['status'] = "Absensi";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../absensi_detail.php?id=" . $id_user);
    } else {
        $_SESSION['status'] = "Absensi";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../absensi_detail.php?id=" . $id_user);
    }
}
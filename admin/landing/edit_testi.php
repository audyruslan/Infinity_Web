<?php
session_start();
require '../../functions.php';

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama_lengkap = $data['nama_lengkap'];
    $pekerjaan = $data['pekerjaan'];
    $ulasan = $data['ulasan'];

    $query = "UPDATE tb_landing_testi
                SET
				nama_lengkap = '$nama_lengkap',
				pekerjaan = '$pekerjaan',
				ulasan = '$ulasan'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        $_SESSION['status'] = "Testimonial";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../home_landing.php");
    } else {
        $_SESSION['status'] = "Testimonial";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../home_landing.php");
    }
}

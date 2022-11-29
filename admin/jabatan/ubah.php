<?php
session_start();
require '../../functions.php';

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama_jabatan = $data['nama_jabatan'];

    $query = "UPDATE tb_jabatan
                SET
				nama_jabatan = '$nama_jabatan'
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
        $_SESSION['status'] = "Data Jabatan / Posisi";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../jabatan.php");
    } else {
        $_SESSION['status'] = "Data Jabatan / Posisi";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../jabatan.php");
    }
}

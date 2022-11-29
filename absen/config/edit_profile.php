<?php
session_start();
require '../functions.php';

function ubah_profile($data)
{
    global $conn;
    $id = $data["id"];
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE tb_users SET
				nama_lengkap = '$nama_lengkap',
				email = '$email',
				no_hp = '$no_hp',
				alamat = '$alamat'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_profile($_POST) > 0) {
        $_SESSION['status'] = "Profile Anda";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../pengaturan.php");
    } else {
        $_SESSION['status'] = "Profile Anda";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../pengaturan.php");
    }
}
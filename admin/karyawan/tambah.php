<?php
session_start();
require '../../functions.php';

function tambah($data)
{
    global $conn;

    $nama_lengkap = $data['nama_lengkap'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $jabatan = $data['jabatan'];
    $image_profile = img_profile();
    $username = $data['username'];
    $password = $data['password'];
    $role = $data['role'];

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan data ke database
    mysqli_query($conn, "INSERT INTO tb_users
        (nama_lengkap,jenis_kelamin,jabatan,image_profile,username,password,role)
        VALUES
        ('$nama_lengkap','$jenis_kelamin','$jabatan','$image_profile','$username','$password','$role')");

    return mysqli_affected_rows($conn);
}

//Jika Tombol Tambah Ditekan
if (isset($_POST["tambah"])) {

    if (tambah($_POST) > 0) {
        $_SESSION['status'] = "Data Karyawan";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../karyawan.php");
    } else {
        $_SESSION['status'] = "Data Karyawan";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../karyawan.php");
    }
}

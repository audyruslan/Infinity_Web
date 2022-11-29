<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "infinity_db");
// link
$base_url = "http://localhost/infinity";

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"]; //$username isi dng session username.
    //cocokan data pengguna berdasarkan $username.
    $data = mysqli_query($conn, "SELECT * FROM tb_users WHERE username='$username'");
    //ambil data hasil pencocokan.
    $pengguna = mysqli_fetch_assoc($data);

    //data ini hanya untuk level admin
    if ($_SESSION["role"] == "1") {
        //hitung semua pengguna
        $count = mysqli_query($conn, "SELECT * FROM tb_users ORDER BY id DESC");
        $totalPengguna = mysqli_num_rows($count); //total pengguna
        //hitung semua admin
        $count = mysqli_query($conn, "SELECT * FROM tb_users WHERE role='1'");
        $totalAdmin = mysqli_num_rows($count); //total admin
        //hitung semua tb_users
        $count = mysqli_query($conn, "SELECT * FROM tb_users WHERE role='2'");
        $totalUser = mysqli_num_rows($count); //total tb_users
    }
}

// Hapus Data Karyawan
function hapus_karyawan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_users WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Jabatan / Posisi
function hapus_jabatan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_jabatan WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Testimonial
function hapus_testi($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_landing_testi WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Frequently Asked Questions

function hapus_faq($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_landing_faq WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Upload Image Profile
function img_profile()
{
    $namaFile = $_FILES['gambar']['name'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpName, '../../assets/img/profile/' . $namaFile);

    return $namaFile;
}

// Upload Image Logo
function img_logo()
{
    $namaFile = $_FILES['logo']['name'];
    $tmpName = $_FILES['logo']['tmp_name'];

    move_uploaded_file($tmpName, '../../assets/img/client/' . $namaFile);

    return $namaFile;
}

// Upload Image Testi
function img_testi()
{
    $namaFile = $_FILES['testi']['name'];
    $tmpName = $_FILES['testi']['tmp_name'];

    move_uploaded_file($tmpName, '../../assets/img/testimonials/' . $namaFile);

    return $namaFile;
}

// Upload Image Card ID
function img_card()
{
    $namaFile = $_FILES['card']['name'];
    $tmpName = $_FILES['card']['tmp_name'];

    move_uploaded_file($tmpName, '../../assets/img/team/' . $namaFile);

    return $namaFile;
}

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
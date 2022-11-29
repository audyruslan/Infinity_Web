<?php
session_start();
require 'functions.php';
$id_user = $_SESSION["id"];
$json = array();
$sql = mysqli_query($conn, "SELECT * FROM tb_presensi 
                            JOIN tb_users
                            ON tb_presensi.id_user = tb_users.id
                            WHERE id_user = '$id_user'");
while ($row = mysqli_fetch_assoc($sql)) {
    $json[] = array(
        'backgroundColor' => 'green',
        'id' => $row["id"],
        'title' => $row["ket_presensi"],
        'start' => $row["tgl_presensi"],
        'end' => $row["tgl_presensi"],
        'extendedProps' => [
            'keterangan' => $row["ket_presensi"],
        ],
        'display' => 'background'
    );
}
echo json_encode($json);

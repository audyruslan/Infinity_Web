<?php
session_start();
require '../functions.php';
$id_user = $_GET["id"];
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
            'tgl_presensi' => tgl_indo($row['tgl_presensi']),
            'time_presensi' => date('H:i', strtotime($row["time_presensi"])),
            'keterangan' => $row["ket_presensi"],
        ],
        'display' => 'background'
    );
}

// echo $json;
echo json_encode($json);
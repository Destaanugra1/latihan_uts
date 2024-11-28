<?php
include '../../koneksi.php';

$kd = $_GET['id_pasien_020'];
mysqli_query($mysqli, "DELETE FROM tabel_pasien_2359201020 WHERE id_pasien_020 = '$kd'");

header("location: ../../database/pasien.php");
exit;
?>
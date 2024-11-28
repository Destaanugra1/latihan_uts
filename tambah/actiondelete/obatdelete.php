<?php
include '../../koneksi.php';

$kd = $_GET['id_obat_020'];
mysqli_query($mysqli, "DELETE FROM tabel_obat_2359201020 WHERE id_obat_020 = '$kd'");

header("location: ../../database/obat.php");
exit;
?>
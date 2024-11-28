<?php
include '../koneksi.php';
$dbkasir = $_POST['id_pasien_020'];
$nama = $_POST['nama_pasien_020'];
$alamat = $_POST['tanggal_lahir_pasien_020'];
mysqli_query($mysqli, "UPDATE tabel_pasien_2359201020 SET nama_pasien_020='$nama', tanggal_lahir_pasien_020='$alamat' WHERE id_pasien_020='$dbkasir'");

header("location:../database/pasien.php?pesan=update");
?>
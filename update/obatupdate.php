<?php
include '../koneksi.php';
$dbkasir = $_POST['id_obat_020'];
$nama = $_POST['nama_obat_020'];
$alamat = $_POST['pembuat_obat_020'];
$telephone = $_POST['stok_obat_020'];
$harga = $_POST['tanggal_kadaluarsa_020'];
mysqli_query($mysqli, "UPDATE tabel_obat_2359201020 SET nama_obat_020='$nama', stok_obat_020='$telephone', pembuat_obat_020='$alamat', tanggal_kadaluarsa_020='$harga' WHERE id_obat_020='$dbkasir'");

header("location:../database/obat.php?pesan=update");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah data Kontraktor</title>
</head>
<body>
    <h3>UBAH data Penjual</h3>
    <?php
    include_once('../koneksi.php');
    $id_obat_020 = $_GET['id_obat_020'];
    $mysqli = mysqli_query($mysqli, "SELECT * FROM tabel_obat_2359201020 WHERE id_obat_020='$id_obat_020'");
    $nomor = 1; 
    while ($user_data = mysqli_fetch_array($mysqli)) {
    ?>
    
    <form action="../update/obatupdate.php" method="post">
        <table>
            <tr>
                <td>Nama </td>
                <td>
                    <input type="hidden" name="id_obat_020" value="<?php echo $user_data['id_obat_020'] ?>">
                    <input type="text" name="nama_obat_020" value="<?php echo $user_data['nama_obat_020'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pembuat Obat</td>
                <td><input type="text" name="pembuat_obat_020" value="<?php echo $user_data['pembuat_obat_020'] ?>"></td>
            </tr>
            <tr>
                <td>Stok Obat</td>
                <td><input type="text" name="stok_obat_020" value="<?php echo $user_data['stok_obat_020'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal expired</td>
                <td><input type="text" name="tanggal_kadaluarsa_020" value="<?php echo $user_data['tanggal_kadaluarsa_020'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>
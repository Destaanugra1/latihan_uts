<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actiontambah/obataction.php">
        <table>
            <tr>
                <td>id obat</td>
                <td><input type="text" maxlength="5" name="id_obat_020"></td>
            </tr>
            <tr>
                <td>Nama obat</td>
                <td><input type="text" name="nama_obat_020"></td>
            </tr>
            <tr>
                <td>Pembuat Obat</td>
                <td><input type="text" name="pembuat_obat_020"></td>
            <tr>
                <td>Stok Obat</td>
                <td><input type="text" name="stok_obat_020"></td>
            </tr>
            <tr>
                <td>Tanggal expiret</td>
                <td><input type="text" name="tanggal_kadaluarsa_020"></td>
            </tr>
            <tr>
                <td>Update</td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="dataelektronik.php">Kembali</a>
</body>
</html>
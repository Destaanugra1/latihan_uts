<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Elektronik</title>
</head>
<body>
    <h3>TAMBAH DATA ELEKTRONIK</h3>
    <form method="post" action="./actiontambah/pasienaction.php">
        <table>
            <tr>
                <td>id pasien</td>
                <td><input type="text" maxlength="5" name="id_pasien_020"></td>
            </tr>
            <tr>
                <td>Nama pasien</td>
                <td><input type="text" name="nama_pasien_020"></td>
            </tr>
            <tr>
                <td>tanggal Lahir</td>
                <td><input type="text" name="tanggal_lahir_pasien_020"></td>
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
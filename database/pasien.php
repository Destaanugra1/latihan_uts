<?php  

include_once('../koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM tabel_pasien_2359201020 ORDER BY id_pasien_020   DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS</title>
</head>
<body>
  
  <a href="../tambah/pasientambah.php">Tambah Data Pekerja</a> <br /> <br />
  <table width='80%' border=1>
    <tr>
      <th>id pasien</th>
      <th>nama pasien</th>
      <th>Tanggal lahir pasien</th>
      <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_pasien_020']."</td>";
        echo "<td>".$user_data['nama_pasien_020']."</td>";
        echo "<td>".$user_data['tanggal_lahir_pasien_020']."</td>";
        echo "<td>
    <a href='../edit/pasienedit.php?id_pasien_020=" . $user_data['id_pasien_020'] . "'>Edit</a> | <a href='../tambah/actiondelete/pasiendelete.php?id_pasien_020=" . $user_data['id_pasien_020'] . "'>Delete</a></td></tr>";
    }
    ?>
  </table>
  <a href="../index.php">Kembali ke menu utama</a>
</body>
</html>
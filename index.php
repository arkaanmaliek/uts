<?php
    $wilayah = $_POST['wilayah'];
    $jumlah_positif = $_POST['jumlah-positif'];
    $jumlah_dirawat = $_POST['jumlah-dirawat'];
    $jumlah_sembuh = $_POST['jumlah-sembuh'];
    $jumlah_meninggal = $_POST['jumlah-meninggal'];
    $nama_operator = $_POST['nama-operator'];
    $nim_mahasiswa = $_POST['nim-mahasiswa'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container" align="center">
    <h2>
      Data Pemantauan Covid-19 Wilayah <?php echo $wilayah ?> 
      <br>
      Per 17 April 2022 14:08:16 (Waktu dan Jam Sekarang)
      <br>
      <?php echo $nama_operator . "/" . $nim_mahasiswa ?>
    </h2>
    <table border='1px'>
  </div>
        <tr>
          <th>Positif</th>
          <th>Dirawat</th>
          <th>Sembuh</th>
          <th>Meninggal</th>
        </tr>
        <tr>
          <td><?php echo $jumlah_positif ?></td>
          <td><?php echo $jumlah_dirawat ?></td>
          <td><?php echo $jumlah_sembuh ?></td>
          <td><?php echo $jumlah_meninggal ?></td>
        </tr>
      </table>
</body>
</html>

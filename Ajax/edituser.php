<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Data</title>
  </head>
  <body>
    <h2>Edit Data Jadwal Kelas</h2>
    <form autocomplete="off" action="" method="post">
      <?php
      require '../koneksi.php';
      $id = $_GET["Id_Kelas"];
      $rows = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM jadwalkelas WHERE Id_Kelas = '$id'"));
      ?>
      <input type="hidden" name="Id_Kelas"  id="Id_Kelas" value="<?php echo $rows['Id_Kelas']; ?>">
      <label for="">Nama Kelas</label>
      <input type="text" name="NamaKelas" id="NamaKelas" value="<?php echo $rows['NamaKelas']; ?>"> <br>
      <label for="">Jam Mulai</label>
      <input type="text" name="JamMulai" id="JamMulai" value="<?php echo $rows['JamMulai']; ?>"> <br>
      <label for="">Jam Selesai</label>
      <input type="text" name="JamSelesai" id="JamSelesai" value="<?php echo $rows['JamSelesai']; ?>"> <br>
      <label for="">Nama Guru</label>
      <input type="text" name="NamaGuru" id="NamaGuru" value="<?php echo $rows['NamaGuru']; ?>"> <br>
      <label for="">Pelajaran</label>
      <input type="text" name="Pelajaran" id="Pelajaran" value="<?php echo $rows['Pelajaran']; ?>"> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>

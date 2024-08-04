<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Data</title>
  </head>
  <body>
    <h2>Edit Data Penilaian</h2>
    <form autocomplete="off" action="" method="post">
      <?php
      require '../koneksi.php';
      $id = $_GET["Id_Nilai"];
      $rows = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM penilaian WHERE Id_Nilai = '$id'"));
      ?>
      <input type="hidden" name="Id_Nilai"  id="Id_Nilai" value="<?php echo $rows['Id_Nilai']; ?>">
      <label for="">Nama Siswa</label>
      <input type="text" name="NamaSiswa" id="NamaSiswa" value="<?php echo $rows['NamaSIswa']; ?>"> <br>
      <label for="">Nilai Bahasa Inggris</label>
      <input type="text" name="Nilaia" id="Nilaia" value="<?php echo $rows['Nilaia']; ?>"> <br>
      <label for="">Nilai Matematika</label>
      <input type="text" name="Nilaib" id="Nilaib" value="<?php echo $rows['Nilaib']; ?>"> <br>
      <label for="">Nilai IPA</label>
      <input type="text" name="Nilaic" id="Nilaic" value="<?php echo $rows['Nilaic']; ?>"> <br>
      <label for="">Nilai Bahasa Indonesia</label>
      <input type="text" name="Nilaid" id="Nilaid" value="<?php echo $rows['Nilaid']; ?>"> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>

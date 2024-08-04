<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
  </head>
  <body>
    <h2>Tambah Data Penilaian</h2>
    <form autocomplete="off" action="" method="post">
      <label for="">Id Nilai</label>
      <input type="text" id="Id_Nilai" name="Id_Nilai" value=""> <br>
      <label for="">Nama Siswa</label>  
      <input type="text" id="NamaSiswa" name="NamaSiswa" value=""> <br>
      <label for="">Nilai Bahasa Inggris</label>
      <input type="text" id="Nilaia" name="Nilaia" value=""> <br>
      <label for="">Nilai Matematika</label>
      <input type="text" id="Nilaib" name="Nilaib" value=""> <br>
      <label for="">Nilai IPA</label>
      <input type="text" id="Nilaic" name="Nilaic" value=""> <br>
      <label for="">Nilai Bahasa Indonesia</label>
      <input type="text" id="Nilaid" name="Nilaid" value=""> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>

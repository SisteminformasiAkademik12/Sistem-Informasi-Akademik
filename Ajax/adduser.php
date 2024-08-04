<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data</title>
  </head>
  <body>
    <h2>Tambah Data Jadwal Kelas</h2>
    <form autocomplete="off" action="" method="post">
      <label for="">Id Kelas</label>
      <input type="text" id="Id_Kelas" name="Id_Kelas" value=""> <br>
      <label for="">Nama Kelas</label>
      <input type="text" id="NamaKelas" name="NamaKelas" value=""> <br>
      <label for="">Jam Mulai</label>
      <input type="text" id="JamMulai" name="JamMulai" value=""> <br>
      <label for="">Jam Selesai</label>
      <input type="text" id="JamSelesai" name="JamSelesai" value=""> <br>
      <label for="">Nama Guru</label>
      <input type="text" id="NamaGuru" name="NamaGuru" value=""> <br>
      <label for="">Pelajaran</label>
      <input type="text" id="Pelajaran" name="Pelajaran" value=""> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>print</title>
<style>
    table{
      width: 100%;
      border-collapse: collapse;
    }
  </style>
<script>
    window.print();
  </script>
</head>
<body>
  <h3 style="text-align: center;">Data Pegawai</h3>
<br>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Pegawai</th>
        <th>NIP</th>
        <th>Jabatan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once 'koneksi.php';
      $q = "SELECT * FROM tb_pegawai";
      $result = mysqli_query($koneksi, $q);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <!-- jangan lupa ini  -->
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['nama_pegawai'] ?></td>
          <td><?= $row['nip'] ?></td>
          <td><?= $row['jabatan'] ?></td>

        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>

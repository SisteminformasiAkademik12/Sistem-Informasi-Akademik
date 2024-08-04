<?php
require '../koneksi.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}

function insert(){
  global $koneksi;

  $Id_Nilai = $_POST["Id_Nilai"];
  $NamaSiswa = $_POST["NamaSiswa"];
  $Nilaia = $_POST["Nilaia"];
  $Nilaib = $_POST["Nilaib"];
  $Nilaic = $_POST["Nilaic"];
  $Nilaid = $_POST["Nilaid"];

  $query = "INSERT INTO penilaian VALUES('$Id_Nilai', '$NamaSiswa', '$Nilaia', '$Nilaib', '$Nilaic', '$Nilaid')";
  mysqli_query($koneksi, $query);

  echo "Inserted Successfully";
}

function edit(){
  global $koneksi;

  $Id_Nilai = $_POST["Id_Nilai"];
  $NamaSiswa = $_POST["NamaSiswa"];
  $Nilaia = $_POST["Nilaia"];
  $Nilaib = $_POST["Nilaib"];
  $Nilaic = $_POST["Nilaic"];
  $Nilaid = $_POST["Nilaid"];

  $query = "UPDATE penilaian SET NamaSiswa = '$NamaSiswa', Nilaia = '$Nilaia', Nilaib = '$Nilaib', Nilaic = '$Nilaic', Nilaid = '$Nilaid' WHERE Id_Nilai = '$Id_Nilai'";
  $result= mysqli_query($koneksi, $query);
  if ($result) {
    echo "Updated Successfully";
} else {
    echo "Update Failed: " . mysqli_error($koneksi);
}

}

function delete(){
  global $koneksi;

  $id = $_POST["action"];

  $query = "DELETE FROM penilaian WHERE Id_Nilai = '$id'";
  $result= mysqli_query($koneksi, $query);
  if ($result) {
    echo "Delete Successfully";
} else {
    echo "Update Failed: " . mysqli_error($koneksi);
}
}

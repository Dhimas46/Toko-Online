<?php
if(!defined('INDEX')) die("");

$query = mysqli_query($connect, "UPDATE jabatan SET nama_jabatan = '$_POST[id_jabatan]'");

if($query){
  echo "Data berhasil disimpan!";
  echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";

}else{
  echo "Tidak dapat menyimpan data!<br>";
  echo mysqli_error();

}
 ?>

<?php

if(!defined('INDEX')) die("");
$query = mysqli_query($connect, "DELETE FROM jabatan WHERE id_jabatan='$_GET[id_jabatan]'");

if($query){
  echo "Data berhasil dihapus!";
  echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
}else{
  echo "Tidak dapat menyimpan data!<br>";
  echo mysqli_error();

}
 ?>

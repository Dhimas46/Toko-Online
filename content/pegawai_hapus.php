<?php
if(!defined('INDEX')) die("");

if(file_exist("images/$_GET[foto]")) unlink("images/$_GET[foto]");
$query = mysqli_query($connect, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id_pegawai]'");

if($query){
    echo "Data Berhasil Dihapus!";
    echo"<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
}else{
    echo "Tidak Dapat Menyimpan Data! <br>";
    echo mysqli_error();
}

?>

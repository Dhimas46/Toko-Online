<?php

if(!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$loaksi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if($foto == ""){
    $query = mysqli_query($connect, "INSERT INTO pegawai SET nama_pegawai = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamins]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    id_jabatan = '$_POST[jabatan]',
    keterangan = '$_POST[keterangan]'
    ");
}else{
    if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png" ){
        $error = "Tipe File Tidak Dapat Didukung!";
    }elseif($ukuranfile >= 1000000){
        echo $ukuranfile;
        $error = "Ukuran File Terlalu Besar (Lebih Dari 1MB)!";
    }else{
        move_uploaded_file($lokasi, "image/".$foto);
        $query = mysqli_query($connect, "INSERT INTO pegawai SET foto = '$foto',
        nama_pegawai = '$_POST[nama_pegawai]',
        jenis_kelamin = '$_POST[jenis_kelamin]',
        tanggal_lahir = '$_POST[tanggal_lahir]',
        id_jabatan = '$_POST[id_jabatan]',
        keterangan = '$_POST[keterangan]'
        ");
    }
}

if($error != ""){
    echo $error;
    echo"<meta http-equiv='refersh' content='2;url=?hal=pegawai_tambah'>";
}elseif($query){
    echo "Data Berhasil Disimpan :)";
    echo "<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
}else{
    echo "Tidak Dapat Menyimpan Data :(";
    echo mysqli_error();
}
?>

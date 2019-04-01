<?php

if(!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$loaksi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if($foto == ""){
    $query = mysqli_query($connect, "INSERT INTO pegawai SET nama_pegawai = '$_POST[nama_pegawi]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    id_jabatan = '$_POST[id_jabatan]',
    keterangan = '$_POST[keterangan]',
    WHERE id_pegawai = '$_POST[id]'
    ");
}else{
    if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png" ){
        $error = "Tipe File Tidak Dapat Didukung!";
    }elseif($ukuranfile >= 1000000){
        echo $ukuranfile;
        $error = "Ukuran File Terlalu Besar (Lebih Dari 1MB)!";
    }else{
        $query = mysqli_query($connect, "SELECT * FROM pegawai WHERE id_pegawai ='$_POST[id]'");
        $data = mysqli_fetch_array($query);
        if(file_exist("images/$data[foto]")) unlink("images/$data[foto]");
        move_uploaded_file($lokasi, "image/".$foto);
        $query = mysqli_query($connect, "INSERT INTO pegawai SET foto = '$foto',
        nama_pegawai = '$_POST[nama]',
        jenis_kelamin = '$_POST[jk]',
        tanggal_lahir = '$_POST[tanggal]',
        id_jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]'
        ");
    }
}

if($error != ""){
    echo $error;
    echo"<meta http-equiv='refersh' content='2;url=?hal=pegawai_edit&id=$_POST[id]'>";
}elseif($query){
    echo "Data Berhasil Disimpan :)";
    echo "<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
}else{
    echo "Tidak Dapat Menyimpan Data :( <br>";
    echo mysqli_error();
}
?>
